<?php

use Illuminate\Support\Facades\Route;
use Incevio\Package\Instamojo\Http\Controllers\InstamojoPaymentController;
use Incevio\Package\Instamojo\Http\Controllers\ConfigInstamojoController;
//use Incevio\Package\Instamojo\Http\Controllers\PaymentController;

// Web Routes
Route::middleware(['web', 'storefront'])->group(function () {
    Route::any('instamojo/{order}/redirect', [
        InstamojoPaymentController::class, 'redirect'
    ])->name('instamojo.order.redirect');
});

// Admin Routes
Route::middleware(['web', 'auth'])
    ->prefix('admin/setting/instamojo')
    ->name('admin.setting.instamojo.')
    ->group(function () {
        Route::get('activate', [
            ConfigInstamojoController::class, 'activate'
        ])->name('activate');

        Route::put('update', [
            ConfigInstamojoController::class, 'update'
        ])->name('update');

        Route::get('deactivate', [
            ConfigInstamojoController::class, 'deactivate'
        ])->name('deactivate');
    });
