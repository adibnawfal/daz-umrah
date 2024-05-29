<?php

namespace App\Http\Controllers;

use App\Exports\AllPackageExport;
use App\Exports\AllUserExport;
use App\Exports\CustomerExport;
use App\Exports\Package12Days10NightsExport;
use App\Exports\Package22Days20NightsExport;
use App\Exports\AllHotelExport;
use App\Exports\HotelMakkahExport;
use App\Exports\HotelMadinahExport;
use App\Exports\StaffExport;
use App\Models\User;
use App\Models\Hotel;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
  /**
   * Display report page.
   */
  public function getReport(Request $request): View
  {
    return view('report.view', [
      'user' => $request->user(),
    ]);
  }

  /**
   * Display all user page.
   */
  public function getAllUser(Request $request): View
  {
    $allUser = User::all();

    return view('report.all-user', [
      'user' => $request->user(),
      'allUser' => $allUser,
    ]);
  }

  /**
   * Export all user data.
   */
  public function exportAllUser()
  {
    return Excel::download(new AllUserExport, 'all-user.xlsx');
  }

  /**
   * Display staff page.
   */
  public function getStaff(Request $request): View
  {
    $staff = User::where('role', 'staff')->get();

    return view('report.staff', [
      'user' => $request->user(),
      'staff' => $staff,
    ]);
  }

  /**
   * Export staff data.
   */
  public function exportStaff()
  {
    return Excel::download(new StaffExport, 'staff.xlsx');
  }

  /**
   * Display customer page.
   */
  public function getCustomer(Request $request): View
  {
    $customer = User::where('role', 'customer')->get();

    return view('report.customer', [
      'user' => $request->user(),
      'customer' => $customer,
    ]);
  }

  /**
   * Export customer data.
   */
  public function exportCustomer()
  {
    return Excel::download(new CustomerExport, 'customer.xlsx');
  }

  /**
   * Display all package page.
   */
  public function getAllPackage(Request $request): View
  {
    $allPackage = Package::all();

    return view('report.all-package', [
      'user' => $request->user(),
      'allPackage' => $allPackage,
    ]);
  }

  /**
   * Export all package data.
   */
  public function exportAllPackage()
  {
    return Excel::download(new AllPackageExport, 'all-package.xlsx');
  }

  /**
   * Display 12 days 10 nights page.
   */
  public function get12Days10Nights(Request $request): View
  {
    $package12Days10Nights = Package::whereNotNull('package_12_10_id')->get();

    return view('report.package-12-days-10-nights', [
      'user' => $request->user(),
      'package12Days10Nights' => $package12Days10Nights,
    ]);
  }

  /**
   * Export 12 days 10 nights data.
   */
  public function export12Days10Nights()
  {
    return Excel::download(new Package12Days10NightsExport, '12-days-10-nights.xlsx');
  }

  /**
   * Display 22 days 20 nights page.
   */
  public function get22Days20Nights(Request $request): View
  {
    $package22Days20Nights = Package::whereNotNull('package_22_20_id')->get();

    return view('report.package-22-days-20-nights', [
      'user' => $request->user(),
      'package22Days20Nights' => $package22Days20Nights,
    ]);
  }

  /**
   * Export 22 days 20 nights data.
   */
  public function export22Days20Nights()
  {
    return Excel::download(new Package22Days20NightsExport, '22-days-20-nights.xlsx');
  }


  /**
   * Display all hotel page.
   */
  public function getAllHotel(Request $request): View
  {
    $allHotel = Hotel::all();

    return view('report.all-hotel', [
      'user' => $request->user(),
      'allHotel' => $allHotel,
    ]);
  }

  /**
   * Export all hotel data.
   */
  public function exportAllHotel()
  {
    return Excel::download(new AllHotelExport, 'all-hotel.xlsx');
  }

  /**
   * Display hotel makkah page.
   */
  public function getHotelMakkah(Request $request): View
  {
    $hotelMakkah = Hotel::where('category', 'Makkah')->get();

    return view('report.hotel-makkah', [
      'user' => $request->user(),
      'hotelMakkah' => $hotelMakkah,
    ]);
  }

  /**
   * Export hotel makkah data.
   */
  public function exportHotelMakkah()
  {
    return Excel::download(new HotelMakkahExport, 'hotel-makkah.xlsx');
  }

  /**
   * Display hotel madinah page.
   */
  public function getHotelMadinah(Request $request): View
  {
    $hotelMadinah = Hotel::where('category', 'Madinah')->get();

    return view('report.hotel-madinah', [
      'user' => $request->user(),
      'hotelMadinah' => $hotelMadinah,
    ]);
  }

  /**
   * Export hotel madinah data.
   */
  public function exportHotelMadinah()
  {
    return Excel::download(new HotelMadinahExport, 'hotel-madinah.xlsx');
  }
}