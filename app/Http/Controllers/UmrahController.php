<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use App\Models\User;
use App\Models\Reservation;
use App\Notifications\ReservationNotification;
use Illuminate\Http\Request;
use Illuminate\Http\File as NewFile;
use Illuminate\View\View;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

class UmrahController extends Controller
{
  /**
   * Display Umrah reservation list page.
   */
  public function getReservationList(Request $request): View
  {
    if ($request->User()->role == 'admin' || $request->User()->role == 'staff') {
      $reservation = Reservation::all();
    } else {
      $reservation = Reservation::where('user_id', $request->User()->id)->get();
    }

    return view('umrah.reservation-list', [
      'user' => $request->user(),
      'reservation' => $reservation,
    ]);
  }

  /**
   * Submit update status form.
   */
  public function putUpdateStatus(Request $request, string $id)
  {
    $reservationData = Reservation::findOrFail($id);

    $this->validate($request, [
      'status' => ['required', 'string', 'max:255'],
    ]);

    switch ($request['status']) {
      case 'Under Review':
        $remarks = 'Please wait while our staff reviews your Umrah reservation.';
        break;

      case 'Update Details':
        $remarks = 'Please complete your details and upload the required documents by clicking the \'Update Details\' button under the Actions column.';
        break;

      case 'Make Payment':
        $remarks = 'Please complete your payment by clicking the \'Make Payment\' button under the Actions column.';
        break;

      case 'Approved':
        $remarks = 'Your reservation is completed.';
        break;

      case 'Rejected':
        $remarks = 'Your reservation is rejected. Kindly contact the owner personally at +60174701159 to discuss further.';
        break;

      default:
        $remarks = '';
        break;
    }

    $reservationData->status = $request['status'];
    $reservationData->remarks = $remarks;
    $reservationData->save();

    $user = User::findOrFail($reservationData->user_id);
    $user->notify(new ReservationNotification($reservationData));

    return Redirect::route('umrah.reservation-list')->with('status', 'status-updated');
  }

  /**
   * Submit write remarks form.
   */
  public function patchWriteRemarks(Request $request, string $id)
  {
    $reservationData = Reservation::findOrFail($id);

    $this->validate($request, [
      'remarks' => ['required', 'string', 'max:255'],
    ]);

    $reservationData->update(['remarks' => $request['remarks']]);

    return Redirect::route('umrah.reservation-list')->with('status', 'remarks-updated');
  }

  /**
   * Display update details page.
   */
  public function getUpdateDetails(Request $request, string $id): View
  {
    $reservationData = Reservation::findOrFail($id);

    return view('umrah.update-details', [
      'user' => $request->user(),
      'reservationData' => $reservationData,
    ]);
  }

  /**
   * Submit update details form.
   */
  public function putUpdateDetails(Request $request, string $id)
  {
    $reservationData = Reservation::findOrFail($id);

    $this->validate($request, [
      'identity_card' => ['required', 'mimes:pdf,zip', 'max:10000'],
      'passport' => ['required', 'mimes:pdf,zip', 'max:10000'],
    ]);

    if ($request->hasFile('identity_card') && $request->hasFile('passport')) {
      $identityCard = $request->file('identity_card');
      $passport = $request->file('passport');

      $fileNameIdentityCard = 'identitycard_' . $request->user()->id . '_' . time() . '.' . $identityCard->getClientOriginalExtension();
      $fileNamePassport = 'passport_' . $request->user()->id . '_' . time() . '.' . $passport->getClientOriginalExtension();

      // Ensure the directory exists
      $path = storage_path('app/public/files/umrah');
      if (!File::isDirectory($path)) {
        File::makeDirectory($path, 0777, true, true);
      }

      Storage::putFileAs('public/files/umrah', new NewFile($identityCard), $fileNameIdentityCard);
      Storage::putFileAs('public/files/umrah', new NewFile($passport), $fileNamePassport);

      $reservationData->identity_card = $fileNameIdentityCard;
      $reservationData->passport = $fileNamePassport;
      $reservationData->save();
    }

    return Redirect::route('umrah.reservation-list')->with('status', 'details-updated');
  }

  /**
   * Download reservation documents.
   */
  public function downloadDocuments(string $id)
  {
    $reservationData = Reservation::findOrFail($id);

    $zip = new ZipArchive;
    $zipFileName = 'reservation_' . $reservationData->id . '.zip';

    if ($zip->open(storage_path('app/public/files/umrah/' . $zipFileName), ZipArchive::CREATE) === TRUE) {
      $filesToZip = [
        storage_path('app/public/files/umrah/' . $reservationData->identity_card),
        storage_path('app/public/files/umrah/' . $reservationData->passport),
      ];

      foreach ($filesToZip as $file) {
        $zip->addFile($file, basename($file));
      }

      $zip->close();

      return response()->download(storage_path('app/public/files/umrah/' . $zipFileName))->deleteFileAfterSend(true);
    } else {
      return Redirect::route('umrah.reservation-list')->with('status', 'download-failure');
    }
  }

  /**
   * Display make payment page.
   */
  public function getMakePayment(Request $request, string $id): View
  {
    $reservationData = Reservation::findOrFail($id);

    return view('umrah.make-payment', [
      'user' => $request->user(),
      'reservationData' => $reservationData,
    ]);
  }

  /**
   * Submit make payment form.
   */
  public function patchMakePayment(Request $request, string $id)
  {
    $reservationData = Reservation::findOrFail($id);

    $this->validate($request, [
      'payment_method' => ['required', 'string', 'max:255'],
    ]);

    switch ($request['payment_method']) {
      case 'Cash':
        $reservationData->payment()->update([
          'status' => 'Pending',
          'method' => $request['payment_method'],
          'date_paid' => null,
        ]);
        return Redirect::route('umrah.reservation-list')->with('status', 'payment-cash');

      case 'Stripe':
        $reservationData = Reservation::findOrFail($id);
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $session = Session::create([
          'line_items' => [
            [
              'price_data' => [
                'currency' => 'myr',
                'product_data' => [
                  'name' => 'Package ' . $reservationData->package->name . ' ' . $reservationData->package->year,
                ],
                'unit_amount' => $reservationData->payment->total_amount * 100,
              ],
              'quantity' => 1,
            ],
          ],
          'mode' => 'payment',
          'success_url' => route('umrah.payment-success', $id),
          'cancel_url' => route('umrah.payment-failure'),
        ]);
        return redirect()->away($session->url);

      default:
        return Redirect::route('umrah.reservation-list')->with('status', 'payment-failure');
    }
  }

  /**
   * Handle stripe payment success.
   */
  public function paymentSuccess(string $id)
  {
    $reservationData = Reservation::findOrFail($id);
    $reservationData->payment()->update([
      'status' => 'Paid',
      'method' => 'Stripe',
      'date_paid' => Carbon::now()->toDateTimeString(),
    ]);

    return Redirect::route('umrah.reservation-list')->with('status', 'payment-success');
  }

  /**
   * Handle stripe payment failure.
   */
  public function paymentFailure()
  {
    return Redirect::route('umrah.reservation-list')->with('status', 'payment-failure');
  }

  /**
   * Submit paid by cash form.
   */
  public function paidCash(string $id)
  {
    $reservationData = Reservation::findOrFail($id);
    $reservationData->payment()->update([
      'status' => 'Paid',
      'method' => 'Cash',
      'date_paid' => Carbon::now()->toDateTimeString(),
    ]);

    return Redirect::route('umrah.reservation-list')->with('status', 'payment-success');
  }

  /**
   * Submit cancel reservation form.
   */
  public function patchCancelReservation(string $id)
  {
    $reservationData = Reservation::findOrFail($id);
    $reservationData->update([
      'status' => 'Canceled',
      'remarks' => 'Your reservation has been canceled.'
    ]);

    return Redirect::route('umrah.reservation-list')->with('status', 'reservation-canceled');
  }

  /**
   * Delete reservation.
   */
  public function deleteReservation(string $id)
  {
    $reservationData = Reservation::findOrFail($id);
    $reservationData->delete();

    return Redirect::route('umrah.reservation-list')->with('status', 'reservation-deleted');
  }
}