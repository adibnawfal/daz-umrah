<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Price;
use App\Models\TravelDate;
use App\Models\Payment;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Redirect;

class WelcomeController extends Controller
{
  /**
   * Display welcome page.
   */
  public function getWelcome(): View
  {
    $packages = Package::all();

    return view('welcome.view', [
      'packages' => $packages,
    ]);
  }

  /**
   * Display all package page.
   */
  public function getAllPackage(): View
  {
    $package = Package::all();

    return view('welcome.all-package', [
      'package' => $package,
    ]);
  }

  /**
   * Display package details page.
   */
  public function getPackageDetails(int $id): View
  {
    $packageData = Package::find($id);
    $travelDate = TravelDate::all();

    return view('welcome.package-details', [
      'packageData' => $packageData,
      'travelDate' => $travelDate,
    ]);
  }

  /**
   * Display Umrah reservation page.
   */
  public function getUmrahReservation(Request $request, int $packageId, int $priceId, string $room): View
  {
    $packageData = Package::find($packageId);
    $travelDate = TravelDate::all();
    $priceData = Price::find($priceId);

    if ($room == '4 or 5 People') {
      $packageAmount = $priceData->room_4_5;
    } else if ($room == '3 People') {
      $packageAmount = $priceData->room_3;
    } else if ($room == '2 People') {
      $packageAmount = $priceData->room_2;
    }

    return view('welcome.umrah-reservation', [
      'user' => $request->user(),
      'packageData' => $packageData,
      'travelDate' => $travelDate,
      'priceData' => $priceData,
      'room' => $room,
      'packageAmount' => $packageAmount,
    ]);
  }

  /**
   * Submit Umrah reservation form.
   */
  public function postUmrahReservation(Request $request, int $packageId, int $priceId, string $room)
  {
    $payment = new Payment();
    $reservation = new Reservation();
    $priceData = Price::find($priceId);
    $userId = auth()->user()->id;

    $this->validate($request, [
      'travel_date' => ['required', 'exists:travel_dates,id'],
      'first_name' => ['required', 'string', 'max:255'],
      'last_name' => ['nullable', 'string', 'max:255'],
      'phone_no' => ['nullable', 'string', 'max:255'],
      'terms_and_conditions' => ['accepted'],
    ]);

    $request->user()->update(['first_name' => $request['first_name']]);
    $request->user()->update(['last_name' => $request['last_name']]);
    $request->user()->update(['phone_no' => $request['phone_no']]);

    if ($room == '4 or 5 People') {
      $totalAmount = $priceData->room_4_5;
    } else if ($room == '3 People') {
      $totalAmount = $priceData->room_3;
    } else if ($room == '2 People') {
      $totalAmount = $priceData->room_2;
    }

    $travelDateData = TravelDate::find($request['travel_date']);

    $payment->package = $priceData->package;
    $payment->total_amount = $totalAmount;
    $payment->status = 'Pending';
    $payment->save();

    $reservation->user_id = $userId;
    $reservation->package_id = $packageId;
    $reservation->room = $room;
    $reservation->from_date = $travelDateData->from;
    $reservation->to_date = $travelDateData->to;
    $reservation->status = 'Under Review';
    $reservation->remarks = 'Please wait while our staff reviews your Umrah reservation.';
    $reservation->payment_id = $payment->id;
    $reservation->save();

    return Redirect::route('umrah.reservation-list')->with('status', 'reservation-submitted');
  }
}