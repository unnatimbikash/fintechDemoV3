<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserModelController;
use App\Http\Controllers\DashboardController;


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
Route::middleware('guest')->get('/login',[UserModelController::class,'login'])->name('login');
Route::get('/logout',[UserModelController::class,'logout'])->name('logout');
Route::post('/loginverify',[UserModelController::class,'verifylogin']);
Route::middleware('auth')->group(function () {
    // Your routes that require both authentication and valid login status
    Route::get('/dashboard',[DashboardController::class,'show'])->name('dashboard');
    Route::get('/newdashboard',[DashboardController::class,'create'])->name('example');
    Route::get('/', function () {
        return view('welcome');
    });
});
// Route::get('/dashboard',[DashboardController::class,'show'])->name('dashboard')->middleware('checkLoginStatus');


