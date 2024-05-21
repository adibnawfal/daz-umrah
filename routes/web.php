<?php

use App\Http\Controllers\WelcomeController;
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

// Route::get('/', function () {
//   return view('welcome');
// })->name('welcome');

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/welcome/package/', [WelcomeController::class, 'getPackage'])->name('welcome.package');
Route::get('/welcome/package/details/{id}', [WelcomeController::class, 'getPackageDetails'])->name('welcome.package-details');

// Route::get('/dashboard', function () {
//   return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
  // Welcome
  Route::get('/welcome/package/umrah-reservation/{packageId}/price/{priceId}/room-price/{room}', [WelcomeController::class, 'getUmrahReservation'])->name('welcome.umrah-reservation');
  Route::post('/welcome/package/umrah-reservation/{packageId}/price/{priceId}/room-price/{room}', [WelcomeController::class, 'postUmrahReservation'])->name('welcome.post-umrah-reservation');

  // Package
  Route::get('/package', [PackageController::class, 'getPackage'])->name('package.view');
  Route::get('/package/details/{id}', [PackageController::class, 'getPackageDetails'])->name('package.details');
  Route::get('/package/details/update/{id}', [PackageController::class, 'getUpdateDetails'])->name('package.update-details');
  Route::put('/package/details/update/{id}', [PackageController::class, 'putUpdateDetails'])->name('package.put-update-details');
  Route::delete('/package/details/{id}', [PackageController::class, 'deletePackageDetails'])->name('package.delete-details');
  Route::get('/package/add', [PackageController::class, 'getPackageAdd'])->name('package.add');
  Route::post('/package/add', [PackageController::class, 'postPackageAdd'])->name('package.add-submit');
  Route::get('/package/travel-date', [PackageController::class, 'getTravelDate'])->name('package.travel-date');
  Route::post('/package/travel-date', [PackageController::class, 'postTravelDate'])->name('package.add-travel-date');
  Route::delete('/package/travel-date/{id}', [PackageController::class, 'deleteTravelDate'])->name('package.delete-travel-date');

  // Umrah
  Route::get('/umrah/reservation-list', [UmrahController::class, 'getReservationList'])->name('umrah.reservation-list');

  // Profile
  Route::get('/profile', [ProfileController::class, 'getProfile'])->name('profile.view');
  Route::post('/profile/update-picture', [ProfileController::class, 'updatePicture'])->name('profile.update-picture');
  Route::patch('/profile/update-profile', [ProfileController::class, 'updateProfile'])->name('profile.update-profile');
  Route::patch('/profile/update-address', [ProfileController::class, 'updateAddress'])->name('profile.update-address');
  Route::delete('/profile/delete-picture', [ProfileController::class, 'deletePicture'])->name('profile.delete-picture');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

  // Report
  Route::get('/report', [ReportController::class, 'getReport'])->name('report.view');

  // Feedback
  Route::get('/feedback', [FeedbackController::class, 'getFeedback'])->name('feedback.view');
  Route::get('/feedback/give-feedback', [FeedbackController::class, 'getGiveFeedback'])->name('feedback.give-feedback');
  Route::get('/feedback/edit-feedback-form/{id}', [FeedbackController::class, 'getEditFeedbackForm'])->name('feedback.edit-feedback-form');
  Route::post('/feedback/submit-feedback', [FeedbackController::class, 'postSubmitFeedback'])->name('feedback.submit-feedback');
  Route::put('/feedback/edit-feedback/{id}', [FeedbackController::class, 'putEditFeedback'])->name('feedback.edit-feedback');
  Route::delete('/feedback/delete-feedback/{id}', [FeedbackController::class, 'deleteFeedback'])->name('feedback.delete-feedback');
});

// Admin routes
Route::middleware(['auth', 'role:admin'])->group(function () {
  // Route::get('/admin/dashboard', [AdminController::class, 'getDashboard'])->name('admin.dashboard');
});

// Staff routes
Route::middleware(['auth', 'role:staff'])->group(function () {
  // Route::get('/staff/dashboard', [StaffController::class, 'getDashboard'])->name('staff.dashboard');
});

// Customer routes
Route::middleware(['auth', 'role:customer'])->group(function () {
  // Route::get('/customer/dashboard', [CustomerController::class, 'getDashboard'])->name('customer.dashboard');
});

require __DIR__ . '/auth.php';