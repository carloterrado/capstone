<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/')->group(function()
{
    Route::get('',[FrontController::class,'home']);
    Route::group(['middleware'=>['auth']],function(){   
        Route::match(['post','get'],'cars',[FrontController::class,'cars']);
        Route::get('arkilla-logout',[FrontController::class,'logout'])->name('logout');
        Route::get('profile',[FrontController::class,'profile']);
        Route::post('update-profile',[FrontController::class,'updateProfile']);
        Route::post('update-password',[FrontController::class,'updatePassword']);
        Route::post('check-user-password',[FrontController::class,'checkPassword']);
        Route::post('book-car',[FrontController::class,'bookCar']);
        Route::get('reserved-car',[FrontController::class,'reservedCar']);
        Route::post('cancel-booking',[FrontController::class,'cancelBooking']);
        Route::post('delete-booking',[FrontController::class,'deleteBooking']);
        Route::post('return-booking',[FrontController::class,'returnBooking']);
        Route::post('booking-checklist-confirmed',[FrontController::class,'bookingChecklistConfirmed']);
        Route::get('download-booking-history/{id}',[FrontController::class,'downloadBookingHistory']);
        Route::get('download-checklist/{id}',[FrontController::class,'downloadChecklist']);
        
    });
    Route::get('about',[FrontController::class,'about']);
    Route::get('frequently-asked-questions',[FrontController::class,'frequentlyAskedQuestions']);
    Route::get('contact',[FrontController::class,'contact']);
    Route::get('login',[FrontController::class,'getLogin'])->name('login');
    Route::post('arkilla-login',[FrontController::class,'login']);
    Route::match(['get','post'],'signup',[FrontController::class,'signup']);
    Route::get('success',[FrontController::class,'success']);
    Route::match(['get','post'],'forgot-password',[FrontController::class, 'forgotPassword']);
      //    Owner confirmation route
    Route::get('confirm/{code}',[FrontController::class, 'confirmEmail']);

});


    //  Admin routes 
Route::prefix('admin')->group(function()
{
    //  Admin and Owner login / signup
   Route::match(['get','post'],'login',[AdminController::class,'login']);
   Route::match(['get','post'],'signup',[AdminController::class,'signup']);

    //    Owner confirmation route
    Route::get('confirm/{code}',[AdminController::class, 'confirmEmail']);
    Route::match(['get','post'],'forgot-password',[AdminController::class, 'forgotPassword']);

    //  Admin group with middleware auth guard 
    Route::group(['middleware'=>['admin']], function()
    {       
        Route::get('dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
        Route::get('booking',[AdminController::class,'booking']);
        Route::get('new-booking',[AdminController::class,'newBooking']);
        Route::get('approved-booking',[AdminController::class,'approvedBooking']);
        Route::post('update-booking-account',[AdminController::class,'updateBookingAccount']);
        Route::match(['get','post'],'cancel-booking',[AdminController::class,'cancelBooking']);
        Route::post('delete-booking',[AdminController::class,'deleteBooking']);
        Route::post('booking-return-confirmed',[AdminController::class,'bookingReturnConfirmed']);
        Route::match(['get','post'],'booking-history',[AdminController::class,'bookingHistory'])->name('admin.history');
        Route::match(['get','post'],'commission-history',[AdminController::class,'commissionHistory'])->name('commission.history');
        Route::post('download-commission',[AdminController::class, 'downloadCommissionReport'])->name('commission.report');
        Route::post('download-admin-sales',[AdminController::class, 'downloadAdminSalesReport'])->name('admin.sales.report');
        Route::post('download-owner-sales',[AdminController::class, 'downloadOwnerSalesReport'])->name('owner.sales.report');
      
        Route::post('delete-booking-history',[AdminController::class,'deleteBookingHistory']);
        Route::get('download-booking-history/{id}',[AdminController::class,'downloadBookingHistory']);
        Route::post('confirm-commission-fee',[AdminController::class,'confirmCommissionFee']);
        Route::get('download-car-checklist',[AdminController::class,'downloadCarChecklist']);
        Route::post('car-checklist',[AdminController::class,'carChecklist']);
        

        Route::post('book-car-reg-fee',[AdminController::class,'bookCarRegFee']);
        Route::get('car-types',[AdminController::class,'carTypes']);
        Route::post('add-car-type',[AdminController::class,'addCarTypes']);
        Route::post('edit-car-type',[AdminController::class,'editCarTypes']);
        Route::post('update-car-type-status',[AdminController::class,'updateCarTypeStatus']);
        Route::post('delete-car-type',[AdminController::class,'deleteCarTypes']);
        Route::get('cars',[AdminController::class,'cars']);
        Route::post('add-car',[AdminController::class,'addCar']);
        Route::post('edit-car',[AdminController::class,'editCar']);
        Route::post('update-car-status',[AdminController::class,'updateCarStatus']);
        Route::post('delete-car',[AdminController::class,'deleteCar']);
        Route::get('owner-cars',[AdminController::class,'ownerCars']);
        Route::get('car-request',[AdminController::class,'carRequest']);
        Route::post('update-car-account',[AdminController::class,'updateCarAccount']);
        Route::get('car-declined',[AdminController::class,'carDeclined']);
        Route::get('all-admins',[AdminController::class,'allAdmins']);
        Route::post('add-admin',[AdminController::class,'addAdmin']);
        Route::post('edit-admin',[AdminController::class,'editAdmin']);
        Route::get('admins',[AdminController::class,'admins']);
        Route::get('staff',[AdminController::class,'staff']);
        Route::get('owners',[AdminController::class,'owners']);
        Route::get('new-owners',[AdminController::class,'newOwners']);
        Route::get('declined-owners',[AdminController::class,'declinedOwners']);
        Route::get('users',[AdminController::class,'users']);
        Route::get('inactive-users',[AdminController::class,'unverifiedUsers']);
        Route::post('update-admin-status',[AdminController::class,'updateAdminStatus']);
        Route::post('update-user-status',[AdminController::class,'updateUserStatus']);
        Route::post('delete-admin',[AdminController::class,'deleteAdminAccount']);
        Route::post('delete-user',[AdminController::class,'deleteUserAccount']);
        Route::post('update-admin-account',[AdminController::class,'updateAdminAccount']);
        Route::get('profile',[AdminController::class,'profile']);
        Route::post('update-profile',[AdminController::class,'updateProfile']);


        //  Admin update-password 
        Route::match(['get','post'],'update-password',[AdminController::class,'updatePassword']);
        //  Admin check-current-password 
        Route::post('/check-admin-password',[AdminController::class,'checkPassword']);
        Route::get('logout',[AdminController::class,'logout']);
    });
});



require __DIR__.'/auth.php';
