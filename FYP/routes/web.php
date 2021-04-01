<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClassroomController;

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
    return view('welcome');
});

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/

//auth route for both
Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])-> name
    ('dashboard');
});

Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard/class', [DashboardController::class, 'class'])-> name
    ('dashboard.class');
});

//Teacher Profile
Route::group(['middleware' => ['auth', 'role:teacher']], function(){
    Route::get('/dashboard/teacherprofile', [DashboardController::class, 'teacherprofile'])-> name
    ('dashboard.teacherprofile');
});

//Student Profile
Route::group(['middleware' => ['auth', 'role:student']], function(){
    Route::get('/dashboard/studentprofile', [DashboardController::class, 'studentprofile'])-> name
    ('dashboard.studentprofile');
});

Route::get('/addclass',[ClassroomController::class,'addClass']);
Route::post('createclass',[ClassroomController::class,'createClass'])->name('class.create');
Route::get('/classrooms',[ClassroomController::class,'getClass']);
Route::get('/classrooms/{id}',[ClassroomController::class,'getClassById']);
Route::get('/deleteclass/{id}',[ClassroomController::class,'deleteClass']);
Route::get('editclass/{id}',[ClassroomController::class,'editClass']);
Route::post('updateclass',[ClassroomController::class,'updateClass'])->name('class.update');

require __DIR__.'/auth.php';