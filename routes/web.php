<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AttendanceLogsController;
use App\Http\Controllers\BiometricDeviceController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LateTimeController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\OverTimeController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SheetReportController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::resource('/admin', AdminController::class);
Route::resource('/employee', EmployeeController::class);
Route::resource('/schedule', ScheduleController::class);
Route::resource('/attandance', AttendanceController::class);
Route::resource('/sheet', SheetReportController::class);
Route::resource('/attandance-log', AttendanceLogsController::class);
Route::resource('/late', LateTimeController::class);
Route::resource('/leave', LeaveController::class);
Route::resource('/overtime', OverTimeController::class);
Route::resource('/biometric', BiometricDeviceController::class);
