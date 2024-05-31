<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserModelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\settings\SettingController;


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

    Route::get('/dashboard',[DashboardController::class,'show'])->name('dashboard');  
    Route::get('/', function () {
        return redirect()->route('dashboard');
    });

    Route::prefix('setting')->group(function (){
        Route::get('/',[SettingController::class,'index']);
        Route::post('/addrole',[SettingController::class,'addrole']);
    });

    // Route::prefix('users')->groups(function(){
    //     Route::get('/',[]);
    // });
});


