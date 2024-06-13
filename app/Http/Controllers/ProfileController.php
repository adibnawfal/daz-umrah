<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\Profile\ProfileUpdateRequest;
use App\Http\Requests\Profile\AddressUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File; // To handle file and directories
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
  /**
   * Display profile page.
   */
  public function getProfile(Request $request): View
  {
    return view('profile.view', [
      'user' => $request->user(),
    ]);
  }

  /**
   * Submit profile picture form.
   */
  public function postProfilePicture(Request $request)
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

    return Redirect::route('profile')->with('status', 'picture-updated');
  }

  /**
   * Delete profile picture.
   */
  public function deleteProfilePicture(Request $request)
  {
    $request->user()->update(['profile_img' => null]);
    return Redirect::route('profile')->with('status', 'picture-deleted');
  }

  /**
   * Submit profile information form.
   */
  public function patchProfileInformation(ProfileUpdateRequest $request): RedirectResponse
  {
    $request->user()->fill($request->validated());

    if ($request->user()->isDirty('email')) {
      $request->user()->email_verified_at = null;
    }

    $request->user()->save();

    return Redirect::route('profile')->with('status', 'profile-updated');
  }

  /**
   * Submit profile adrrees form.
   */
  public function patchProfileAddress(AddressUpdateRequest $request): RedirectResponse
  {
    $request->user()->fill($request->validated());

    if ($request->user()->isDirty('email')) {
      $request->user()->email_verified_at = null;
    }

    $request->user()->save();

    return Redirect::route('profile')->with('status', 'address-updated');
  }

  /**
   * Delete profile.
   */
  public function deleteProfile(Request $request): RedirectResponse
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

  /**
   * Display staff page.
   */
  public function getStaff(Request $request): View
  {
    $staff = User::where('role', 'staff')->get();

    return view('profile.staff', [
      'user' => $request->user(),
      'staff' => $staff,
    ]);
  }

  /**
   * Display add staff page.
   */
  public function getAddStaff(Request $request): View
  {
    return view('profile.add-staff', [
      'user' => $request->user(),
    ]);
  }

  /**
   * Submit add staff form.
   */
  public function postAddStaff(Request $request)
  {
    $this->validate($request, [
      'first_name' => ['required', 'string', 'max:255'],
      'last_name' => ['nullable', 'string', 'max:255'],
      'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
      'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ]);

    User::create([
      'first_name' => $request['first_name'],
      'last_name' => $request['last_name'],
      'email' => $request['email'],
      'role' => 'staff',
      'password' => Hash::make($request['password']),
    ]);

    return Redirect::route('profile.staff')->with('status', 'staff-submitted');
  }

  /**
   * Display update staff page.
   */
  public function getUpdateStaff(Request $request, string $id): View
  {
    $staffData = User::findOrFail($id);

    return view('profile.update-staff', [
      'user' => $request->user(),
      'staffData' => $staffData,
    ]);
  }

  /**
   * Submit update staff form.
   */
  public function patchUpdateStaff(Request $request, string $id)
  {
    $staffData = User::findOrFail($id);

    $this->validate($request, [
      'first_name' => ['required', 'string', 'max:255'],
      'last_name' => ['nullable', 'string', 'max:255'],
      'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($staffData->id)],
      'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
    ]);

    if ($staffData->isDirty('email')) {
      $staffData->email_verified_at = null;
    }

    $staffData->update([
      'first_name' => $request['first_name'],
      'last_name' => $request['last_name'],
      'email' => $request['email'],
      'password' => Hash::make($request['password']),
    ]);

    return Redirect::route('profile.staff')->with('status', 'staff-updated');
  }

  /**
   * Delete staff.
   */
  public function deleteStaff(string $id)
  {
    $staffData = User::findOrFail($id);
    $staffData->delete();

    return Redirect::route('profile.staff')->with('status', 'staff-deleted');
  }
}