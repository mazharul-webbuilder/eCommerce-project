<?php

use Illuminate\Support\Facades\Route;
use Incevio\Package\AuthorizeNet\Http\Controllers\ConfigAuthorizeNetController;
use Incevio\Package\Instamojo\Http\Controllers\AuthorizeNetPaymentController;

//use Incevio\Package\Instamojo\Http\Controllers\PaymentController;

// Web Routes
Route::middleware(['web', 'storefront'])->group(function () {
//    Route::any('authorizenet/{order}/redirect', [
//        AuthorizeNetPaymentController::class, 'redirect'
//    ])->name('authorizenet.order.redirect');
});

// Admin Routes
Route::middleware(['web', 'auth'])
    ->prefix('admin/setting/authorizenet')
    ->name('admin.setting.authorizenet.')
    ->group(function () {
        Route::get('activate', [
            ConfigAuthorizeNetController::class, 'activate'
        ])->name('activate');

        Route::put('update', [
            ConfigAuthorizeNetController::class, 'update'
        ])->name('update');

        Route::get('deactivate', [
            ConfigAuthorizeNetController::class, 'deactivate'
        ])->name('deactivate');
    });
