<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\LessonController;
use App\Http\Controllers\Admin\DavomatController;
use App\Http\Controllers\AjaxController;

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
Route::get('/ajax',[AjaxController::class, 'index'])->name('ajax');
Route::get('/ajax/getdata',[AjaxController::class, 'getdata'])->name('ajax.getdata');

Route::prefix('v-admin')->name('admin.')->prefix('v-admin')->group(function(){
    Route::get('/',[AdminController::class, 'davomats'])->name('dashboard');

    Route::resource('student',StudentController::class);
    Route::resource('groups', GroupController::class);
    Route::resource('teachers', TeacherController::class);
    Route::resource('lessons', LessonController::class);
    Route::resource('attendance', DavomatController::class);
    // Route::get('check/{id}/{lesson_id}',DavomatController::class,'davomats')->where(['id' => '[0-9]+', 'lesson_id' => '[0-9]+']);
    // Route::get('teachers/remove', TeacherController::class)->name('teachers.remove');


    // Route::resource('device', DeviceController::class)->name('devices');


});
