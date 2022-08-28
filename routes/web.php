<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Staff\Auth\StaffAuthenticatedController;
use App\Http\Controllers\Admin\Auth\AdminAuthController;
use App\Http\Controllers\Admin\TtableController;
use App\Http\Controllers\Staff\HomeController;
use App\Http\Controllers\Staff\StudentController;
use App\Http\Controllers\StudentAttendanceController;
use App\Http\Controllers\tablecontroller;
use App\Http\Controllers\ReportController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('attendance',[StudentAttendanceController::class,'attendance'])->name('attendance');
Route::post('date',[StudentAttendanceController::class,'date'])->name('date');
Route::post('subject',[StudentAttendanceController::class,'subject'])->name('subject');
Route::post('logout',[AuthenticatedSessionController::class,'destroy'])->name('logout');

require __DIR__.'/auth.php';


//staff-route

Route::namespace('Staff')->prefix('staff')->name('staff.')->group(function(){
    Route::namespace('Auth')->group(function(){
        Route::get('login',[StaffAuthenticatedController::class,'create'])->name('login');
        Route::post('login',[StaffAuthenticatedController::class,'store'])->name('stafflogin');
    });
    Route::get('dashboard',[HomeController::class,'index'])->name('dashboard');

    Route::get('success', function () {
        return view('staff.success');
    });

    Route::get('attendance',[HomeController::class,'attendance'])->name('attendance');
    Route::post('subject',[StudentController::class,'subject'])->name('subject');
    Route::post('students',[HomeController::class,'student'])->name('students');
    Route::post('store',[StudentController::class,'store'])->name('store');
    Route::post('logout',[StaffAuthenticatedController::class,'destroy'])->name('logout');
    Route::get('report', function () {
        return view('staff.report');
    })->name('report');
    Route::get('attrep',[StudentController::class,'repatt'])->name('attrep');
    Route::post('getatt',[StudentController::class,'getatt'])->name('getatt');
    Route::get('getreport',[StudentController::class,'getatt'])->name('getreport');
    Route::get('trans_rep',[StudentController::class,'reptrans'])->name('transrep');
    Route::post('getbus',[StudentController::class,'getbus'])->name('getbus');
    Route::get('faculty', [ReportController::class,'faculty'])->name('faculty');
    Route::post('getdetails',[ReportController::class,'getstaff'])->name('getdetails');
    Route::get('ttable',[ReportController::class,'ttable'])->name('ttable');
    Route::post('tablerep',[ReportController::class,'reptable'])->name('tablerep');
});

//admin-route 

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::namespace('Auth')->group(function(){
        Route::get('login',[AdminAuthController::class,'adminlogin'])->name('adminlogin');
        Route::post('login',[AdminAuthController::class,'handlelogin'])->name('handlelogin');
    });
    Route::get('dashboard',[AdminAuthController::class,'index'])->name('dashboard');
    Route::get('timetable',[AdminAuthController::class,'ttable'])->name('timetable');
    Route::post('logout',[AdminAuthController::class,'destroy'])->name('logout');
    Route::post('staff',[TtableController::class,'staff'])->name('staff');
    Route::post('update',[TtableController::class,'update'])->name('update');
});
