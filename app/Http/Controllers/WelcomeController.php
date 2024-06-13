<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\TravelDate;
use App\Models\Payment;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

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
   * Display register page.
   */
  public function getRegister(Request $request): View
  {
    return view('auth.register', [
      'firstName' => $request->first_name,
      'lastName' => $request->last_name,
    ]);
  }

  /**
   * Display register page from footer.
   */
  public function getRegisterFooter(Request $request): View
  {
    return view('auth.register', [
      'email' => $request->email,
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
    $packageData = Package::findOrFail($id);
    $travelDate = TravelDate::all();

    return view('welcome.package-details', [
      'packageData' => $packageData,
      'travelDate' => $travelDate,
    ]);
  }

  /**
   * Display Umrah reservation page.
   */
  public function getUmrahReservation(Request $request, string $packageId, string $selectedPackage, string $room): View
  {
    $packageData = Package::findOrFail($packageId);
    $travelDate = TravelDate::where('package', $selectedPackage)->get();

    if ($selectedPackage === '12 Days 10 Nights') {
      if ($room == '4 or 5 People') {
        $packageAmount = $packageData->package_12_10->room_4_5;
      } else if ($room == '3 People') {
        $packageAmount = $packageData->package_12_10->room_3;
      } else if ($room == '2 People') {
        $packageAmount = $packageData->package_12_10->room_2;
      }
    } elseif ($selectedPackage === '22 Days 20 Nights') {
      if ($room == '4 or 5 People') {
        $packageAmount = $packageData->package_22_20->room_4_5;
      } else if ($room == '3 People') {
        $packageAmount = $packageData->package_22_20->room_3;
      } else if ($room == '2 People') {
        $packageAmount = $packageData->package_22_20->room_2;
      }
    }

    return view('welcome.umrah-reservation', [
      'user' => $request->user(),
      'packageData' => $packageData,
      'travelDate' => $travelDate,
      'selectedPackage' => $selectedPackage,
      'room' => $room,
      'packageAmount' => $packageAmount,
    ]);
  }

  /**
   * Submit Umrah reservation form.
   */
  public function postUmrahReservation(Request $request, string $packageId, string $selectedPackage, string $room)
  {
    $packageData = Package::findOrFail($packageId);
    $payment = new Payment();
    $reservation = new Reservation();

    $this->validate($request, [
      'travel_date' => ['required', 'exists:travel_dates,id'],
      'first_name' => ['required', 'string', 'max:255'],
      'last_name' => ['nullable', 'string', 'max:255'],
      'phone_no' => ['nullable', 'string', 'max:255'],
      'terms_and_conditions' => ['accepted'],
    ]);

    $request->user()->update([
      'first_name' => $request['first_name'],
      'last_name' => $request['last_name'],
      'phone_no' => $request['phone_no'],
    ]);

    if ($selectedPackage === '12 Days 10 Nights') {
      if ($room == '4 or 5 People') {
        $packageAmount = $packageData->package_12_10->room_4_5;
      } else if ($room == '3 People') {
        $packageAmount = $packageData->package_12_10->room_3;
      } else if ($room == '2 People') {
        $packageAmount = $packageData->package_12_10->room_2;
      }
    } elseif ($selectedPackage === '22 Days 20 Nights') {
      if ($room == '4 or 5 People') {
        $packageAmount = $packageData->package_22_20->room_4_5;
      } else if ($room == '3 People') {
        $packageAmount = $packageData->package_22_20->room_3;
      } else if ($room == '2 People') {
        $packageAmount = $packageData->package_22_20->room_2;
      }
    }

    $travelDateData = TravelDate::findOrFail($request['travel_date']);

    $payment = new Payment();
    $payment->package = $selectedPackage;
    $payment->total_amount = $packageAmount;
    $payment->status = 'Pending';
    $payment->save();

    $reservation = new Reservation();
    $reservation->user_id = $request->user()->id;
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