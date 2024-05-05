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
   * Display the package page.
   */
  public function getPackage(Request $request): View
  {
    $package = Package::all();

    return view('package.view', [
      'user' => $request->user(),
      'package' => $package,
    ]);
  }

  /**
   * Display the package details page.
   */
  public function getPackageDetails(Request $request, string $id): View
  {
    $packageData = Package::find($id);
    $travelDate = TravelDate::all();

    return view('package.details', [
      'user' => $request->user(),
      'packageData' => $packageData,
      'travelDate' => $travelDate,
    ]);
  }

  /**
   * Display the package details page.
   */
  public function getUpdateDetails(Request $request, string $id): View
  {
    $packageData = Package::find($id);
    $hotel = Hotel::all();

    return view('package.update-details', [
      'user' => $request->user(),
      'packageData' => $packageData,
      'hotel' => $hotel,
    ]);
  }

  public function putUpdateDetails(Request $request, string $id)
  {
    $package = Package::findOrFail($id);

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
      $package->update(['cover_img' => $filename]);
    }

    $packageData = $request->validate([
      'name' => ['required', 'string', 'max:255'],
      'year' => ['required', 'integer', 'min:1900'],
      'hotel_makkah' => ['required', 'exists:hotels,id'],
      'hotel_madinah' => ['required', 'exists:hotels,id'],
    ]);

    $package->update($packageData);

    $this->validate($request, [
      'price_12_10_room_4_5' => ['nullable', 'numeric', 'min:1'],
      'price_12_10_room_3' => ['nullable', 'numeric', 'min:1'],
      'price_12_10_room_2' => ['nullable', 'numeric', 'min:1'],
      'price_22_20_room_4_5' => ['nullable', 'numeric', 'min:1'],
      'price_22_20_room_3' => ['nullable', 'numeric', 'min:1'],
      'price_22_20_room_2' => ['nullable', 'numeric', 'min:1'],
    ]);

    $package->package_12_10()->update([
      'room_4_5' => $request['price_12_10_room_4_5'],
      'room_3' => $request['price_12_10_room_3'],
      'room_2' => $request['price_12_10_room_2'],
    ]);

    $package->package_22_20()->update([
      'room_4_5' => $request['price_22_20_room_4_5'],
      'room_3' => $request['price_22_20_room_3'],
      'room_2' => $request['price_22_20_room_2'],
    ]);

    return Redirect::route('package.details', $id)->with('status', 'package-updated');
  }

  /**
   * Delete package details.
   */
  public function deletePackageDetails(string $id)
  {
    $package = Package::find($id);
    $package->package_12_10()->delete();
    $package->package_22_20()->delete();
    $package->delete();

    return Redirect::route('package.view')->with('status', 'package-details-deleted');
  }

  /**
   * Display the package add page.
   */
  public function getPackageAdd(Request $request): View
  {
    $hotel = Hotel::all();

    return view('package.add', [
      'user' => $request->user(),
      'hotel' => $hotel,
    ]);
  }

  /**
   * Submit the package add form.
   */
  public function postPackageAdd(Request $request)
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
      'price_12_10_room_4_5' => ['nullable', 'numeric', 'min:1'],
      'price_12_10_room_3' => ['nullable', 'numeric', 'min:1'],
      'price_12_10_room_2' => ['nullable', 'numeric', 'min:1'],
      'price_22_20_room_4_5' => ['nullable', 'numeric', 'min:1'],
      'price_22_20_room_3' => ['nullable', 'numeric', 'min:1'],
      'price_22_20_room_2' => ['nullable', 'numeric', 'min:1'],
    ]);

    if (!$request->has('price_12_10_room_4_5') && !$request->has('price_22_20_room_4_5')) {
      // trows error to view
    }

    if ($request->filled('price_12_10_room_4_5')) {
      $price_12_10->package = '12 Days 10 Nights';
      $price_12_10->room_4_5 = $request['price_12_10_room_4_5'];
      $price_12_10->room_3 = $request['price_12_10_room_3'];
      $price_12_10->room_2 = $request['price_12_10_room_2'];
      $price_12_10->save();
      $package->package_12_10_id = $price_12_10->id;
    }

    if ($request->filled('price_22_20_room_4_5')) {
      $price_22_20->package = '22 Days 20 Nights';
      $price_22_20->room_4_5 = $request['price_22_20_room_4_5'];
      $price_22_20->room_3 = $request['price_22_20_room_3'];
      $price_22_20->room_2 = $request['price_22_20_room_2'];
      $price_22_20->save();
      $package->package_22_20_id = $price_22_20->id;
    }

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
      $package->cover_img = $filename;
    }

    $package->name = $request['name'];
    $package->year = $request['year'];
    $package->hotel_makkah_id = $request['hotel_makkah'];
    $package->hotel_madinah_id = $request['hotel_madinah'];
    $package->save();

    return Redirect::route('package.view')->with('status', 'package-submitted');
  }

  /**
   * Display the package page.
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
   * Add travel date.
   */
  public function postTravelDate(Request $request)
  {
    $travelDates = new TravelDate();

    $this->validate($request, [
      'package' => ['required', 'string', 'max:255'],
      'from_date' => ['required', 'date'],
      'to_date' => ['required', 'date'],
    ]);

    $travelDates->package = $request['package'];
    $travelDates->from = Carbon::create($request['from_date']);
    $travelDates->to = Carbon::create($request['to_date']);
    $travelDates->save();

    return Redirect::route('package.travel-date')->with('status', 'travel-date-submitted');
  }

  /**
   * Delete travel date.
   */
  public function deleteTravelDate(string $id)
  {
    $travelDate = TravelDate::find($id);
    $travelDate->delete();

    return Redirect::route('package.travel-date')->with('status', 'travel-date-deleted');
  }
}