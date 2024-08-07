<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Tpa\FieldApplicationController;
use App\Http\Controllers\TPAStaff\AdminFunction\StaffManagementController;
use App\Http\Controllers\TPAStaff\AdminFunction\TpaManagementController;
use App\Http\Controllers\TPAStaff\TPAContactsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

    // ------------------------------------------------------ Contact routes ------------------------------------------------------------------

    Route::get('TPA/contact', [TPAContactsController::class, 'index']);
    Route::post('TPA/contact', [TPAContactsController::class,'store'])->name('store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('TPA/field-application', [FieldApplicationController::class, 'index']);

    // -------------------------------------- Admin management routes -------------------------------------------
    Route::get('TPA/staff-management', [StaffManagementController::class, 'index']);
    Route::get('TPA/tpa-management', [TpaManagementController::class, 'index']);
});

require __DIR__.'/auth.php';
