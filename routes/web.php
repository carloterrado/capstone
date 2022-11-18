<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('front.home');
});


   // --- Admin login --- //
   Route::match(['get','post'],'admin/login',[AdminController::class,'login']);

// --- Admin routes --- //
Route::prefix('admin')->group(function()
{

    // --- Admin group with middleware auth guard --- //
    Route::group(['middleware'=>['admin']], function()
    {
        
        Route::get('dashboard',[AdminController::class,'dashboard']);
        Route::get('logout',[AdminController::class,'logout']);
    });
});
// --- Owner routes --- //
Route::prefix('owner')->group(function()
{

    // --- Admin group with middleware auth guard --- //
    Route::group(['middleware'=>['admin']], function()
    {     
        Route::get('dashboard',[AdminController::class,'dashboard']);
    });
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
