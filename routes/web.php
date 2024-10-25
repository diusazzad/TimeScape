<?php

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use PHPUnit\Framework\Attributes\Group;

Route::redirect('/', 'admin/home');

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Change Password Routes...
Route::get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
Route::patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');


Route::middleware(['auth'])->prefix('admin')->as('admin.')->group(function () {
    // Test Controller Routes
    Route::get('/home', [TestController::class, 'index'])->name('home');

    // Permission Routes
    Route::resource('/permissions', PermissionController::class);
    Route::get('/permissions_mass_destroy', [PermissionController::class, 'massDestroy'])->name('permissions.mass_destroy');

    // Role Routes
    Route::resource('/roles', RoleController::class);
    Route::get('/roles_mass_destroy', [RoleController::class, 'massDestroy'])->name('roles.mass_destroy');

    // User Routes
    Route::resource('/users', UserController::class);
    Route::get('/users_mass_destroy', [UserController::class, 'massDestroy'])->name('users.mass_destroy');
});


require __DIR__.'/auth.php';
