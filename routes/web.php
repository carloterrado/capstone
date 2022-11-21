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
    Route::get('cars',[FrontController::class,'cars']);
    Route::get('about',[FrontController::class,'about']);
    Route::get('contact',[FrontController::class,'contact']);
    Route::get('partial-content/{type?}',[FrontController::class,'partialContent']);
});


   

    //  Admin routes 
Route::prefix('admin')->group(function()
{
    //  Admin and Owner login 
   Route::match(['get','post'],'login',[AdminController::class,'login']);

    //  Admin group with middleware auth guard 
    Route::group(['middleware'=>['admin']], function()
    {       
        Route::get('dashboard',[AdminController::class,'dashboard']);
        //  Admin update-password 
        Route::match(['get','post'],'update-password',[AdminController::class,'updatePassword']);
        //  Admin check-current-password 
        Route::post('/check-admin-password',[AdminController::class,'checkPassword']);
        Route::get('logout',[AdminController::class,'logout']);
    });
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
