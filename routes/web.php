<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\GroupController;

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

Route::get('/', function () {
    return view('registration');
});


Route::prefix('v-admin')->name('admin.')->prefix('v-admin')->group(function(){
    Route::get('/',[AdminController::class, 'index'])->name('dashboard');
    Route::resource('student',StudentController::class);
    Route::resource('groups', GroupController::class);
    // Route::resource('device', DeviceController::class)->name('devices');


});
