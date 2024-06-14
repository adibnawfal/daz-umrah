<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Price;
use App\Models\Hotel;
use App\Models\TravelDate;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class PackageController extends Controller
{
  /**
   * Display manage package page.
   */
  public function getManagePackage(Request $request): View
  {
    $package = Package::all();

    return view('package.manage-package', [
      'user' => $request->user(),
      'package' => $package,
    ]);
  }

  /**
   * Display package details page.
   */
  public function getPackageDetails(Request $request, string $id): View
  {
    $packageData = Package::find($id);
    $travelDate = TravelDate::all();

    return view('package.package-details', [
      'user' => $request->user(),
      'packageData' => $packageData,
      'travelDate' => $travelDate,
    ]);
  }

  /**
   * Display update package page.
   */
  public function getUpdatePackage(Request $request, string $id): View
  {
    $packageData = Package::find($id);
    $hotel = Hotel::all();

    return view('package.update-package', [
      'user' => $request->user(),
      'packageData' => $packageData,
      'hotel' => $hotel,
    ]);
  }

  /**
   * Submit update package form.
   */
  public function patchUpdatePackage(Request $request, string $id)
  {
    $packageData = Package::findOrFail($id);

    $this->validate($request, [
      'cover_img' => ['nullable', 'mimes:jpeg,jpg,png', 'max:10000'],
      'name' => ['required', 'string', 'max:255'],
      'year' => ['required', 'integer', 'min:1900'],
      'hotel_makkah' => ['required', 'exists:hotels,id'],
      'hotel_madinah' => ['required', 'exists:hotels,id'],
      'price_12_10_room_4_5' => ['required_without:price_22_20_room_4_5'],
      'price_12_10_room_3' => ['required_with:price_12_10_room_4_5'],
      'price_12_10_room_2' => ['required_with:price_12_10_room_4_5'],
      'price_22_20_room_4_5' => ['required_without:price_12_10_room_4_5'],
      'price_22_20_room_3' => ['required_with:price_22_20_room_4_5'],
      'price_22_20_room_2' => ['required_with:price_22_20_room_4_5'],
    ]);

    if (
      !$request->filled('price_12_10_room_4_5')
      && !$request->filled('price_12_10_room_3')
      && !$request->filled('price_12_10_room_2')
      && !$request->filled('price_22_20_room_4_5')
      && !$request->filled('price_22_20_room_3')
      && !$request->filled('price_22_20_room_2')
    ) {
      return Redirect::route('package.package-details', $id)->with('status', 'package-update-failure');
    } else {
      $packageData->package_12_10()->update([
        'room_4_5' => $request['price_12_10_room_4_5'],
        'room_3' => $request['price_12_10_room_3'],
        'room_2' => $request['price_12_10_room_2'],
      ]);

      $packageData->package_22_20()->update([
        'room_4_5' => $request['price_22_20_room_4_5'],
        'room_3' => $request['price_22_20_room_3'],
        'room_2' => $request['price_22_20_room_2'],
      ]);

      // Save profile picture
      if ($request->hasFile('cover_img')) {
        $image = $request->file('cover_img');
        $filename = 'package_' . time() . '.' . $image->getClientOriginalExtension();

        // Ensure the directory exists
        $path = storage_path('app/public/images/package');
        if (!File::isDirectory($path)) {
          File::makeDirectory($path, 0777, true, true);
        }

        Image::make($image)->save($path . '/' . $filename);
        $packageData->update(['cover_img' => $filename]);
      }

      $packageData->update([
        'name' => $request['name'],
        'year' => $request['year'],
        'hotel_makkah_id' => $request['hotel_makkah'],
        'hotel_madinah_id' => $request['hotel_madinah'],
      ]);

      return Redirect::route('package.package-details', $id)->with('status', 'package-updated');
    }
  }

  /**
   * Delete package details.
   */
  public function deletePackage(string $id)
  {
    $package = Package::find($id);
    $package->package_12_10()->delete();
    $package->package_22_20()->delete();
    $package->delete();

    return Redirect::route('package.manage-package')->with('status', 'package-deleted');
  }

  /**
   * Display add package page.
   */
  public function getAddPackage(Request $request): View
  {
    $hotel = Hotel::all();

    return view('package.add-package', [
      'user' => $request->user(),
      'hotel' => $hotel,
    ]);
  }

  /**
   * Submit add package form.
   */
  public function postAddPackage(Request $request)
  {
    $price_12_10 = new Price();
    $price_22_20 = new Price();
    $package = new Package();

    $this->validate($request, [
      'cover_img' => ['required', 'mimes:jpeg,jpg,png', 'max:10000'],
      'name' => ['required', 'string', 'max:255'],
      'year' => ['required', 'integer', 'min:1900'],
      'hotel_makkah' => ['required', 'exists:hotels,id'],
      'hotel_madinah' => ['required', 'exists:hotels,id'],
      'price_12_10_room_4_5' => ['required_without:price_22_20_room_4_5'],
      'price_12_10_room_3' => ['required_with:price_12_10_room_4_5'],
      'price_12_10_room_2' => ['required_with:price_12_10_room_4_5'],
      'price_22_20_room_4_5' => ['required_without:price_12_10_room_4_5'],
      'price_22_20_room_3' => ['required_with:price_22_20_room_4_5'],
      'price_22_20_room_2' => ['required_with:price_22_20_room_4_5'],
    ]);

    if (
      !$request->filled('price_12_10_room_4_5')
      && !$request->filled('price_12_10_room_3')
      && !$request->filled('price_12_10_room_2')
      && !$request->filled('price_22_20_room_4_5')
      && !$request->filled('price_22_20_room_3')
      && !$request->filled('price_22_20_room_2')
    ) {
      return Redirect::route('package.manage-package')->with('status', 'package-submit-failure');
    } else {
      $price_12_10->package = '12 Days 10 Nights';
      $price_12_10->room_4_5 = $request['price_12_10_room_4_5'];
      $price_12_10->room_3 = $request['price_12_10_room_3'];
      $price_12_10->room_2 = $request['price_12_10_room_2'];
      $price_12_10->save();

      $price_22_20->package = '22 Days 20 Nights';
      $price_22_20->room_4_5 = $request['price_22_20_room_4_5'];
      $price_22_20->room_3 = $request['price_22_20_room_3'];
      $price_22_20->room_2 = $request['price_22_20_room_2'];
      $price_22_20->save();

      // Save profile picture
      if ($request->hasFile('cover_img')) {
        $image = $request->file('cover_img');
        $filename = 'package_' . time() . '.' . $image->getClientOriginalExtension();

        // Ensure the directory exists
        $path = public_path('images/package');
        if (!File::isDirectory($path)) {
          File::makeDirectory($path, 0777, true, true);
        }

        Image::make($image)->save($path . '/' . $filename);
        $package->cover_img = $filename;
      }

      $package->name = $request['name'];
      $package->year = $request['year'];
      $package->package_12_10_id = $price_12_10->id;
      $package->package_22_20_id = $price_22_20->id;
      $package->hotel_makkah_id = $request['hotel_makkah'];
      $package->hotel_madinah_id = $request['hotel_madinah'];
      $package->save();

      return Redirect::route('package.manage-package')->with('status', 'package-submitted');
    }
  }

  /**
   * Display travel date page.
   */
  public function getTravelDate(Request $request): View
  {
    $package = Package::all();
    $travelDate = TravelDate::all();

    return view('package.travel-date', [
      'user' => $request->user(),
      'package' => $package,
      'travelDate' => $travelDate,
    ]);
  }

  /**
   * Submit travel date form.
   */
  public function postTravelDate(Request $request)
  {
    $travelDate = new TravelDate();

    $this->validate($request, [
      'package' => ['required', 'string', 'max:255'],
      'from_date' => ['required', 'date'],
      'to_date' => ['required', 'date'],
    ]);

    $fromDate = Carbon::parse($request['from_date']);
    $toDate = Carbon::parse($request['to_date']);

    if ($request['package'] === '12 Days 10 Nights') {
      if (($fromDate->diffInDays($toDate) + 1) > 12) {
        return Redirect::route('package.get-travel-date')->with('status', 'exceed-12-days');
      }
    } else if ($request['package'] === '22 Days 20 Nights') {
      if (($fromDate->diffInDays($toDate) + 1) > 22) {
        return Redirect::route('package.get-travel-date')->with('status', 'exceed-22-days');
      }
    }

    $travelDate->package = $request['package'];
    $travelDate->from = Carbon::create($request['from_date']);
    $travelDate->to = Carbon::create($request['to_date']);
    $travelDate->save();

    return Redirect::route('package.get-travel-date')->with('status', 'travel-date-submitted');
  }

  /**
   * Submit update travel date form.
   */
  public function patchTravelDate(Request $request, string $id)
  {
    $travelDateData = TravelDate::findOrFail($id);

    $this->validate($request, [
      'package' => ['required', 'string', 'max:255'],
      'from_date' => ['required', 'date'],
      'to_date' => ['required', 'date'],
    ]);

    $fromDate = Carbon::parse($request['from_date']);
    $toDate = Carbon::parse($request['to_date']);

    if ($request['package'] === '12 Days 10 Nights') {
      if (($fromDate->diffInDays($toDate) + 1) > 12) {
        return Redirect::route('package.get-travel-date')->with('status', 'exceed-12-days');
      }
    } else if ($request['package'] === '22 Days 20 Nights') {
      if (($fromDate->diffInDays($toDate) + 1) > 22) {
        return Redirect::route('package.get-travel-date')->with('status', 'exceed-22-days');
      }
    }

    $travelDateData->update([
      'package' => $request['package'],
      'from' => Carbon::create($request['from_date']),
      'to' => Carbon::create($request['to_date']),
    ]);

    return Redirect::route('package.get-travel-date')->with('status', 'travel-date-updated');
  }

  /**
   * Delete travel date.
   */
  public function deleteTravelDate(string $id)
  {
    $travelDate = TravelDate::find($id);
    $travelDate->delete();

    return Redirect::route('package.get-travel-date')->with('status', 'travel-date-deleted');
  }
}