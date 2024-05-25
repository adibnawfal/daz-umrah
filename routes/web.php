<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\UmrahController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WelcomeController::class, 'getWelcome'])->name('welcome');
Route::get('/welcome/package', [WelcomeController::class, 'getAllPackage'])->name('welcome.all-package');
Route::get('/welcome/package/details/{id}', [WelcomeController::class, 'getPackageDetails'])->name('welcome.package-details');

Route::middleware('auth')->group(function () {
  // Welcome
  Route::get('/welcome/package/umrah-reservation/{packageId}/price/{priceId}/room-price/{room}', [WelcomeController::class, 'getUmrahReservation'])->name('welcome.get-umrah-reservation');
  Route::post('/welcome/package/umrah-reservation/{packageId}/price/{priceId}/room-price/{room}', [WelcomeController::class, 'postUmrahReservation'])->name('welcome.post-umrah-reservation');

  // Dashboard
  Route::get('/dashboard', [DashboardController::class, 'getDashboard'])->name('dashboard');

  // Package
  Route::get('/package/manage', [PackageController::class, 'getManagePackage'])->name('package.manage-package');
  Route::get('/package/details/{id}', [PackageController::class, 'getPackageDetails'])->name('package.package-details');
  Route::get('/package/details/update/{id}', [PackageController::class, 'getUpdatePackage'])->name('package.get-update-package');
  Route::put('/package/details/update/{id}', [PackageController::class, 'putUpdatePackage'])->name('package.put-update-package');
  Route::delete('/package/details/delete/{id}', [PackageController::class, 'deletePackage'])->name('package.delete-package');
  Route::get('/package/add', [PackageController::class, 'getAddPackage'])->name('package.get-add-package');
  Route::post('/package/add', [PackageController::class, 'postAddPackage'])->name('package.post-add-package');
  Route::get('/package/travel-date', [PackageController::class, 'getTravelDate'])->name('package.get-travel-date');
  Route::post('/package/travel-date', [PackageController::class, 'postTravelDate'])->name('package.post-travel-date');
  Route::delete('/package/travel-date/{id}', [PackageController::class, 'deleteTravelDate'])->name('package.delete-travel-date');

  // Umrah
  Route::get('/umrah/reservation-list', [UmrahController::class, 'getReservationList'])->name('umrah.reservation-list');

  // Profile
  Route::get('/profile', [ProfileController::class, 'getProfile'])->name('profile');
  Route::post('/profile/picture', [ProfileController::class, 'postProfilePicture'])->name('profile.post-profile-picture');
  Route::delete('/profile/picture', [ProfileController::class, 'deleteProfilePicture'])->name('profile.delete-profile-picture');
  Route::patch('/profile/information', [ProfileController::class, 'patchProfileInformation'])->name('profile.patch-profile-information');
  Route::patch('/profile/address', [ProfileController::class, 'patchProfileAddress'])->name('profile.patch-profile-address');
  Route::delete('/profile/delete', [ProfileController::class, 'deleteProfile'])->name('profile.delete-profile');

  // Report
  Route::get('/report', [ReportController::class, 'getReport'])->name('report');

  // Feedback
  Route::get('/feedback', [FeedbackController::class, 'getFeedback'])->name('feedback');
  Route::get('/feedback/give', [FeedbackController::class, 'getGiveFeedback'])->name('feedback.get-give-feedback');
  Route::post('/feedback/give', [FeedbackController::class, 'postGiveFeedback'])->name('feedback.post-give-feedback');
  Route::get('/feedback/edit/{id}', [FeedbackController::class, 'getEditFeedback'])->name('feedback.get-edit-feedback');
  Route::put('/feedback/edit/{id}', [FeedbackController::class, 'putEditFeedback'])->name('feedback.put-edit-feedback');
  Route::delete('/feedback/delete/{id}', [FeedbackController::class, 'deleteFeedback'])->name('feedback.delete-feedback');
});

require __DIR__ . '/auth.php';