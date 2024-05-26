<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Http\File as NewFile;
use Illuminate\View\View;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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
    $reservation = Reservation::findOrFail($id);

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

      default:
        $remarks = '';
        break;
    }

    $reservation->status = $request['status'];
    $reservation->remarks = $remarks;
    $reservation->save();

    return Redirect::route('umrah.reservation-list')->with('status', 'status-updated');
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
    $reservation = Reservation::findOrFail($id);

    $this->validate($request, [
      'identity_card' => ['required', 'mimes:jpeg,jpg,png', 'max:10000'],
      'passport' => ['required', 'mimes:jpeg,jpg,png', 'max:10000'],
    ]);

    if ($request->hasFile('identity_card') && $request->hasFile('passport')) {
      $identityCard = $request->file('identity_card');
      $passport = $request->file('passport');

      $fileNameIdentityCard = 'identitycard_' . $request->user()->id . '_' . time() . '.' . $identityCard->getClientOriginalExtension();
      $fileNamePassport = 'passport_' . $request->user()->id . '_' . time() . '.' . $passport->getClientOriginalExtension();

      // Ensure the directory exists
      $path = storage_path('app/images/umrah');
      if (!File::isDirectory($path)) {
        File::makeDirectory($path, 0777, true, true);
      }

      Storage::putFileAs('images/umrah', new NewFile($identityCard), $fileNameIdentityCard);
      Storage::putFileAs('images/umrah', new NewFile($passport), $fileNamePassport);

      $reservation->status = 'Make Payment';
      $reservation->remarks = 'Please complete your payment by clicking the \'Make Payment\' button under the Actions column.';
      $reservation->identity_card = $fileNameIdentityCard;
      $reservation->passport = $fileNamePassport;
      $reservation->save();
    }

    return Redirect::route('umrah.reservation-list')->with('status', 'details-updated');
  }
}