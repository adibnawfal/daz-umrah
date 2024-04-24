<?php

namespace App\Http\Controllers;

use Carbon\CarbonPeriod;
use App\Models\Package;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; // To handle file and directories
use Illuminate\View\View;
use Illuminate\Support\Facades\Redirect;
use Image; // For image manipulation

class PackageController extends Controller
{
  /**
   * Display the package page.
   */
  public function getPackage(Request $request): View
  {
    $packages = Package::all();

    return view('package.view', [
      'user' => $request->user(),
      'packages' => $packages,
    ]);
  }

  /**
   * Display the package page.
   */
  public function getPackageTravelDate(Request $request): View
  {
    $packages = Package::all();

    return view('package.travel-date', [
      'user' => $request->user(),
      'packages' => $packages,
    ]);
  }

  /**
   * Display the package details page.
   */
  public function getPackageDetails(Request $request, string $id): View
  {
    $packageData = Package::find($id);

    return view('package.details', [
      'user' => $request->user(),
      'packageData' => $packageData,
    ]);
  }

  /**
   * Display the package add page.
   */
  public function getPackageAdd(Request $request): View
  {
    $hotels = Hotel::all();

    return view('package.add', [
      'user' => $request->user(),
      'hotels' => $hotels,
    ]);
  }

  /**
   * Submit the package add form.
   */
  public function postPackageAdd(Request $request)
  {
    $packages = new Package();

    $this->validate($request, [
      'hotel_makkah' => ['required', 'integer', 'min:1'],
      'hotel_madinah' => ['required', 'integer', 'min:1'],
      'cover_img' => ['required', 'mimes:jpeg,jpg,png', 'max:10000'],
      'name' => ['required', 'string', 'max:255'],
      'year' => ['required', 'integer', 'min:1'],
      'room_12_4_5' => ['nullable', 'integer', 'min:0'],
      'room_12_3' => ['nullable', 'integer', 'min:0'],
      'room_12_2' => ['nullable', 'integer', 'min:0'],
      'room_22_4_5' => ['nullable', 'integer', 'min:0'],
      'room_22_3' => ['nullable', 'integer', 'min:0'],
      'room_22_2' => ['nullable', 'integer', 'min:0'],
    ]);

    // Save profile picture
    if ($request->hasFile('cover_img')) {
      $image = $request->file('cover_img');
      $filename = 'package_' . time() . '.' . $image->getClientOriginalExtension();

      // Ensure the directory exists
      $path = public_path('images/packages');
      if (!File::isDirectory($path)) {
        File::makeDirectory($path, 0777, true, true);
      }

      Image::make($image)->save($path . '/' . $filename);
      $packages->cover_img = $filename;
    }

    $packages->hotel_makkah_id = $request['hotel_makkah'];
    $packages->hotel_madinah_id = $request['hotel_madinah'];
    // $packages->cover_img = "package_4_0000.jpg";
    $packages->name = $request['name'];
    $packages->year = $request['year'];

    if ($request['room_12_4_5'] && $request['room_22_4_5']) {
      $packages->details = json_encode([
        '12_days_10_nights' => [
          'price' => [
            'room_4_5' => $request['room_12_4_5'],
            'room_3' => $request['room_12_3'],
            'room_2' => $request['room_12_2'],
          ],
          'travel_date' => [
            CarbonPeriod::create('2024-07-24', '2024-08-04'),
            CarbonPeriod::create('2024-08-21', '2024-09-01'),
            CarbonPeriod::create('2024-09-04', '2024-09-15'),
            CarbonPeriod::create('2024-09-10', '2024-09-21'),
            CarbonPeriod::create('2024-10-02', '2024-10-13'),
            CarbonPeriod::create('2024-10-16', '2024-10-27'),
            CarbonPeriod::create('2024-11-06', '2024-11-17'),
            CarbonPeriod::create('2024-11-20', '2024-12-01'),
            CarbonPeriod::create('2024-12-04', '2024-12-15'),
            CarbonPeriod::create('2024-12-20', '2024-12-31'),
          ]
        ],
        '22_days_20_nights' => [
          'price' => [
            'room_4_5' => $request['room_22_4_5'],
            'room_3' => $request['room_22_3'],
            'room_2' => $request['room_22_2'],
          ],
          'travel_date' => [
            CarbonPeriod::create('2024-07-17', '2024-08-07'),
            CarbonPeriod::create('2024-08-07', '2024-08-28'),
            CarbonPeriod::create('2024-09-01', '2024-09-22'),
            CarbonPeriod::create('2024-10-02', '2024-10-23'),
            CarbonPeriod::create('2024-11-06', '2024-11-28'),
            CarbonPeriod::create('2024-12-04', '2024-12-25'),
          ]
        ],
      ]);
    } else if ($request['room_12_4_5'] && !$request['room_22_4_5']) {
      $packages->details = json_encode([
        '12_days_10_nights' => [
          'price' => [
            'room_4_5' => $request['room_12_4_5'],
            'room_3' => $request['room_12_3'],
            'room_2' => $request['room_12_2'],
          ],
          'travel_date' => [
            CarbonPeriod::create('2024-07-24', '2024-08-04'),
            CarbonPeriod::create('2024-08-21', '2024-09-01'),
            CarbonPeriod::create('2024-09-04', '2024-09-15'),
            CarbonPeriod::create('2024-09-10', '2024-09-21'),
            CarbonPeriod::create('2024-10-02', '2024-10-13'),
            CarbonPeriod::create('2024-10-16', '2024-10-27'),
            CarbonPeriod::create('2024-11-06', '2024-11-17'),
            CarbonPeriod::create('2024-11-20', '2024-12-01'),
            CarbonPeriod::create('2024-12-04', '2024-12-15'),
            CarbonPeriod::create('2024-12-20', '2024-12-31'),
          ]
        ],
      ]);
    } else if (!$request['room_12_4_5'] && $request['room_22_4_5']) {
      $packages->details = json_encode([
        '22_days_20_nights' => [
          'price' => [
            'room_4_5' => $request['room_22_4_5'],
            'room_3' => $request['room_22_3'],
            'room_2' => $request['room_22_2'],
          ],
          'travel_date' => [
            CarbonPeriod::create('2024-07-17', '2024-08-07'),
            CarbonPeriod::create('2024-08-07', '2024-08-28'),
            CarbonPeriod::create('2024-09-01', '2024-09-22'),
            CarbonPeriod::create('2024-10-02', '2024-10-23'),
            CarbonPeriod::create('2024-11-06', '2024-11-28'),
            CarbonPeriod::create('2024-12-04', '2024-12-25'),
          ]
        ],
      ]);
    }

    $packages->save();

    return Redirect::route('package.view')->with('status', 'package-submitted');
  }
}