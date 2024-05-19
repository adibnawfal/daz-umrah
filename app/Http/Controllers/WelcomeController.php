<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Price;
use App\Models\TravelDate;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WelcomeController extends Controller
{
  /**
   * Display the welcome page.
   */
  public function index(): View
  {
    $packages = Package::all();

    return view('landing.view', [
      'packages' => $packages,
    ]);
  }

  /**
   * Display the package page.
   */
  public function getPackage(): View
  {
    $package = Package::all();

    return view('landing.package', [
      'package' => $package,
    ]);
  }

  /**
   * Display the package details page.
   */
  public function getPackageDetails(string $id): View
  {
    $packageData = Package::find($id);
    $travelDate = TravelDate::all();

    return view('landing.details', [
      'packageData' => $packageData,
      'travelDate' => $travelDate,
    ]);
  }

  /**
   * Display the Umrah reservation page.
   */
  public function getUmrahReservation(Request $request, string $packageId, string $priceId): View
  {
    $packageData = Package::find($packageId);
    $priceData = Price::find($priceId);

    return view('landing.umrah-reservation', [
      'user' => $request->user(),
      'packageData' => $packageData,
      'priceData' => $priceData,
    ]);
  }
}