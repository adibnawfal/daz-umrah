<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\UmrahController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\FeedbackController;
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
Route::get('/welcome/register', [WelcomeController::class, 'getRegister'])->name('welcome.register');
Route::get('/welcome/register/footer', [WelcomeController::class, 'getRegisterFooter'])->name('welcome.register-footer');
Route::get('/welcome/package', [WelcomeController::class, 'getAllPackage'])->name('welcome.all-package');
Route::get('/welcome/package/details/{id}', [WelcomeController::class, 'getPackageDetails'])->name('welcome.package-details');

Route::middleware('auth')->group(function () {
  // Welcome
  Route::get('/welcome/package/reservation/{packageId}/{selectedPackage}/{room}', [WelcomeController::class, 'getUmrahReservation'])->name('welcome.get-umrah-reservation');
  Route::post('/welcome/package/reservation/{packageId}/{selectedPackage}/{room}', [WelcomeController::class, 'postUmrahReservation'])->name('welcome.post-umrah-reservation');

  // Dashboard
  Route::get('/dashboard', [DashboardController::class, 'getDashboard'])->name('dashboard');
  Route::get('/dashboard/store/gps', [DashboardController::class, 'storeGPS']);
  Route::get('/dashboard/latest/gps', [DashboardController::class, 'getLatestGPS']);

  // Package
  Route::get('/package/manage', [PackageController::class, 'getManagePackage'])->name('package.manage-package');
  Route::get('/package/details/{id}', [PackageController::class, 'getPackageDetails'])->name('package.package-details');
  Route::get('/package/details/update/{id}', [PackageController::class, 'getUpdatePackage'])->name('package.get-update-package');
  Route::patch('/package/details/update/{id}', [PackageController::class, 'patchUpdatePackage'])->name('package.patch-update-package');
  Route::delete('/package/details/delete/{id}', [PackageController::class, 'deletePackage'])->name('package.delete-package');
  Route::get('/package/add', [PackageController::class, 'getAddPackage'])->name('package.get-add-package');
  Route::post('/package/add', [PackageController::class, 'postAddPackage'])->name('package.post-add-package');
  Route::get('/package/travel-date', [PackageController::class, 'getTravelDate'])->name('package.get-travel-date');
  Route::post('/package/travel-date', [PackageController::class, 'postTravelDate'])->name('package.post-travel-date');
  Route::patch('/package/travel-date/{id}', [PackageController::class, 'patchTravelDate'])->name('package.patch-travel-date');
  Route::delete('/package/travel-date/{id}', [PackageController::class, 'deleteTravelDate'])->name('package.delete-travel-date');

  // Umrah
  Route::get('/umrah/reservation', [UmrahController::class, 'getReservationList'])->name('umrah.reservation-list');
  Route::put('/umrah/reservation/{id}', [UmrahController::class, 'putUpdateStatus'])->name('umrah.put-update-status');
  Route::patch('/umrah/reservation/remarks/{id}', [UmrahController::class, 'patchWriteRemarks'])->name('umrah.patch-write-remarks');
  Route::get('/umrah/reservation/details/{id}', [UmrahController::class, 'getUpdateDetails'])->name('umrah.get-update-details');
  Route::put('/umrah/reservation/details/{id}', [UmrahController::class, 'putUpdateDetails'])->name('umrah.put-update-details');
  Route::get('/umrah/reservation/details/documents/{id}', [UmrahController::class, 'downloadDocuments'])->name('umrah.download-documents');
  Route::get('/umrah/reservation/payment/{id}', [UmrahController::class, 'getMakePayment'])->name('umrah.get-make-payment');
  Route::patch('/umrah/reservation/payment/{id}', [UmrahController::class, 'patchMakePayment'])->name('umrah.patch-make-payment');
  Route::get('/umrah/reservation/payment/success/{id}', [UmrahController::class, 'paymentSuccess'])->name('umrah.payment-success');
  Route::get('/umrah/reservation/payment/failure', [UmrahController::class, 'paymentFailure'])->name('umrah.payment-failure');
  Route::patch('/umrah/reservation/payment/cash/{id}', [UmrahController::class, 'paidCash'])->name('umrah.paid-cash');
  Route::patch('/umrah/reservation/cancel/{id}', [UmrahController::class, 'patchCancelReservation'])->name('umrah.patch-cancel-reservation');
  Route::delete('/umrah/reservation/delete/{id}', [UmrahController::class, 'deleteReservation'])->name('umrah.delete-reservation');

  // Profile
  Route::get('/profile', [ProfileController::class, 'getProfile'])->name('profile');
  Route::post('/profile/picture', [ProfileController::class, 'postProfilePicture'])->name('profile.post-profile-picture');
  Route::delete('/profile/picture', [ProfileController::class, 'deleteProfilePicture'])->name('profile.delete-profile-picture');
  Route::patch('/profile/information', [ProfileController::class, 'patchProfileInformation'])->name('profile.patch-profile-information');
  Route::patch('/profile/address', [ProfileController::class, 'patchProfileAddress'])->name('profile.patch-profile-address');
  Route::delete('/profile/delete', [ProfileController::class, 'deleteProfile'])->name('profile.delete-profile');
  Route::get('/profile/staff', [ProfileController::class, 'getStaff'])->name('profile.staff');
  Route::get('/profile/staff/add', [ProfileController::class, 'getAddStaff'])->name('profile.get-add-staff');
  Route::post('/profile/staff/add', [ProfileController::class, 'postAddStaff'])->name('profile.post-add-staff');
  Route::get('/profile/staff/update/{id}', [ProfileController::class, 'getUpdateStaff'])->name('profile.get-update-staff');
  Route::patch('/profile/staff/update/{id}', [ProfileController::class, 'patchUpdateStaff'])->name('profile.patch-update-staff');
  Route::delete('/profile/staff/delete/{id}', [ProfileController::class, 'deleteStaff'])->name('profile.delete-staff');

  // Report
  Route::get('/report', [ReportController::class, 'getReport'])->name('report');
  Route::get('/report/users/all', [ReportController::class, 'getAllUser'])->name('report.all-user');
  Route::get('/report/users/all/export', [ReportController::class, 'exportAllUser'])->name('report.export-all-user');
  Route::get('/report/users/staff', [ReportController::class, 'getStaff'])->name('report.staff');
  Route::get('/report/users/staff/export', [ReportController::class, 'exportStaff'])->name('report.export-staff');
  Route::get('/report/users/customer', [ReportController::class, 'getCustomer'])->name('report.customer');
  Route::get('/report/users/customer/export', [ReportController::class, 'exportCustomer'])->name('report.export-customer');
  Route::get('/report/packages/all', [ReportController::class, 'getAllPackage'])->name('report.all-package');
  Route::get('/report/packages/all/export', [ReportController::class, 'exportAllPackage'])->name('report.export-all-package');
  Route::get('/report/packages/12-days-10-nights', [ReportController::class, 'get12Days10Nights'])->name('report.12-days-10-nights');
  Route::get('/report/packages/12-days-10-nights/export', [ReportController::class, 'export12Days10Nights'])->name('report.export-12-days-10-nights');
  Route::get('/report/packages/22-days-20-nights', [ReportController::class, 'get22Days20Nights'])->name('report.22-days-20-nights');
  Route::get('/report/packages/22-days-20-nights/export', [ReportController::class, 'export22Days20Nights'])->name('report.export-22-days-20-nights');
  Route::get('/report/hotels/all', [ReportController::class, 'getAllHotel'])->name('report.all-hotel');
  Route::get('/report/hotels/all/export', [ReportController::class, 'exportAllHotel'])->name('report.export-all-hotel');
  Route::get('/report/hotels/makkah', [ReportController::class, 'getHotelMakkah'])->name('report.hotel-makkah');
  Route::get('/report/hotels/makkah/export', [ReportController::class, 'exportHotelMakkah'])->name('report.export-hotel-makkah');
  Route::get('/report/hotels/madinah', [ReportController::class, 'getHotelMadinah'])->name('report.hotel-madinah');
  Route::get('/report/hotels/madinah/export', [ReportController::class, 'exportHotelMadinah'])->name('report.export-hotel-madinah');

  // Feedback
  Route::get('/feedback', [FeedbackController::class, 'getFeedback'])->name('feedback');
  Route::get('/feedback/give', [FeedbackController::class, 'getGiveFeedback'])->name('feedback.get-give-feedback');
  Route::post('/feedback/give', [FeedbackController::class, 'postGiveFeedback'])->name('feedback.post-give-feedback');
  Route::get('/feedback/update/{id}', [FeedbackController::class, 'getUpdateFeedback'])->name('feedback.get-update-feedback');
  Route::patch('/feedback/update/{id}', [FeedbackController::class, 'patchUpdateFeedback'])->name('feedback.patch-update-feedback');
  Route::patch('/feedback/reply/{id}', [FeedbackController::class, 'patchReplyFeedback'])->name('feedback.reply-feedback');
  Route::patch('/feedback/favourites/{id}', [FeedbackController::class, 'patchAddToFavourites'])->name('feedback.add-to-favourites');
  Route::delete('/feedback/delete/{id}', [FeedbackController::class, 'deleteFeedback'])->name('feedback.delete-feedback');
});

require __DIR__ . '/auth.php';