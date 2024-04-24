<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WelcomeController extends Controller
{
  /**
   * Display the welcome page.
   */
  public function index(Request $request): View
  {
    $packages = Package::all();

    return view('landing.view', [
      'packages' => $packages,
    ]);
  }

  /**
   * Display the package page.
   */
  public function getPackage(Request $request): View
  {
    $packages = Package::all();

    return view('landing.package', [
      'packages' => $packages,
    ]);
  }

  /**
   * Display the package details page.
   */
  public function getPackageDetails(Request $request, string $id): View
  {
    $packageData = Package::find($id);

    return view('landing.details', [
      'packageData' => $packageData,
    ]);
  }
}
