<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile\ProfileUpdateRequest;
use App\Http\Requests\Profile\AddressUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File; // To handle file and directories
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
  /**
   * Display the user's profile form.
   */
  public function getProfile(Request $request): View
  {
    return view('profile.view', [
      'user' => $request->user(),
    ]);
  }

  /**
   * Update the user's profile picture.
   */
  public function updatePicture(Request $request)
  {
    $this->validate($request, [
      'profile_img' => ['nullable', 'mimes:jpeg,jpg,png', 'max:10000'],
    ]);

    // Save profile picture
    if ($request->hasFile('profile_img')) {
      $image = $request->file('profile_img');
      $filename = 'user_' . $request->user()->id . '_' . time() . '.' . $image->getClientOriginalExtension();

      // Ensure the directory exists
      $path = public_path('images/users');
      if (!File::isDirectory($path)) {
        File::makeDirectory($path, 0777, true, true);
      }

      Image::make($image)->resize(300, 300)->save($path . '/' . $filename);
      $request->user()->update(['profile_img' => $filename]);
    }

    return Redirect::route('profile.view')->with('status', 'picture-updated');
  }

  /**
   * Update the user's profile information.
   */
  public function updateProfile(ProfileUpdateRequest $request): RedirectResponse
  {
    $request->user()->fill($request->validated());

    if ($request->user()->isDirty('email')) {
      $request->user()->email_verified_at = null;
    }

    $request->user()->save();

    return Redirect::route('profile.view')->with('status', 'profile-updated');
  }

  /**
   * Update the user's address information.
   */
  public function updateAddress(AddressUpdateRequest $request): RedirectResponse
  {
    $request->user()->fill($request->validated());

    if ($request->user()->isDirty('email')) {
      $request->user()->email_verified_at = null;
    }

    $request->user()->save();

    return Redirect::route('profile.view')->with('status', 'address-updated');
  }

  public function deletePicture(Request $request)
  {
    $request->user()->update(['profile_img' => null]);
    return Redirect::route('profile.view')->with('status', 'picture-deleted');
  }

  /**
   * Delete the user's account.
   */
  public function destroy(Request $request): RedirectResponse
  {
    $request->validateWithBag('userDeletion', [
      'password' => ['required', 'current_password'],
    ]);

    $user = $request->user();

    Auth::logout();

    $user->delete();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return Redirect::to('/');
  }
}