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
Route::get('/owner/dashboard', function () {
    return view('owner.dashboard');
});

// --- Admin routes --- //
Route::prefix('admin')->group(function(){

     // --- Admin login --- //
    Route::match(['get','post'],'login',[AdminController::class,'login']);
    // --- Admin group with middleware auth guard --- //
    Route::group(['middleware'=>['admin']], function(){
        
        Route::get('dashboard',[AdminController::class,'dashboard']);
        Route::get('logout',[AdminController::class,'logout']);
    });
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
