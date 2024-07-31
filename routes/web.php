<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\LessonController;
use App\Http\Controllers\Admin\DavomatController;
use App\Http\Controllers\Admin\EmployeesController;
use App\Http\Controllers\Admin\ImportController;
use App\Http\Controllers\Admin\AddController;
use App\Http\Controllers\AjaxController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/dashboard')->name('admin.')->middleware('auth')->group(function(){

    Route::get('/', function(){
        return view('admin.index');
    });
    Route::resource('student',StudentController::class);
    Route::get('/student_import',[ImportController::class,'student_import_index'])->name('studentImport_index');
    Route::post('/student_import',[ImportController::class,'student_import_file'])->name('studentImport_file');
    Route::post('/student_add',[AddController::class,'group_student_add'])->name('add_student_group');
    Route::patch('/student_log',[AddController::class, 'group_student_logaut'])->name('student_log');

    Route::resource('groups', GroupController::class);
    Route::resource('users', EmployeesController::class);
    Route::resource('teachers', TeacherController::class);
    Route::resource('lessons', LessonController::class);
    Route::resource('attendance', DavomatController::class);
    // Route::get('check/{id}/{lesson_id}',DavomatController::class,'davomats')->where(['id' => '[0-9]+', 'lesson_id' => '[0-9]+']);
    // Route::get('teachers/remove', TeacherController::class)->name('teachers.remove');

    // Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // });
    // Route::resource('device', DeviceController::class)->name('devices');


});
// Route::get('/dashboard', function () {
//     return view('/dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__.'/auth.php';





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



