<?php

use Illuminate\Support\Facades\Route;
use Incevio\Package\Pharmacy\Http\Controllers\PharmacyController;

// Web Routes
Route::middleware(['web', 'auth', 'admin'])->group(function () {

    // Route::get('admin/pharmacy', [PharmacyController::class, 'index'])->name('admin.pharmacy');
    // Route::post('admin/pharmacy/create', [PharmacyController::class, 'create'])->name('admin.pharmacy.create');

});
