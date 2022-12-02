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
        Route::get('cars',[FrontController::class,'cars']);
        Route::get('arkilla-logout',[FrontController::class,'logout'])->name('logout');
    });
    Route::get('about',[FrontController::class,'about']);
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
        Route::get('dashboard',[AdminController::class,'dashboard']);
        Route::get('cars',[AdminController::class,'cars']);
        Route::get('owner-cars',[AdminController::class,'ownerCars']);
        Route::get('car-request',[AdminController::class,'carRequest']);
        Route::get('car-declined',[AdminController::class,'carDeclined']);
        Route::get('all-admins',[AdminController::class,'allAdmins']);
        Route::post('add-admin',[AdminController::class,'addAdmin']);
        Route::get('admins',[AdminController::class,'admins']);
        Route::get('staff',[AdminController::class,'staff']);
        Route::get('owners',[AdminController::class,'owners']);
        Route::get('new-owners',[AdminController::class,'newOwners']);
        Route::get('declined-owners',[AdminController::class,'declinedOwners']);
        Route::get('users',[AdminController::class,'users']);
        //  Admin update-password 
        Route::match(['get','post'],'update-password',[AdminController::class,'updatePassword']);
        //  Admin check-current-password 
        Route::post('/check-admin-password',[AdminController::class,'checkPassword']);
        Route::get('logout',[AdminController::class,'logout']);
    });
});



require __DIR__.'/auth.php';
