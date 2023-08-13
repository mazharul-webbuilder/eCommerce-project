<?php

use Illuminate\Support\Facades\Route;
use Incevio\Package\Paystack\Http\Controllers\PaystackPaymentController;
use Incevio\Package\Paystack\Http\Controllers\ConfigPaystackController;

//use Incevio\Package\Instamojo\Http\Controllers\PaymentController;

// Web Routes
Route::middleware(['web', 'storefront'])
    ->group(function () {
        Route::any('paystack/{order}/success', [
            PaystackPaymentController::class, 'success'
        ])->name('paystack.order.success');
    });

// Admin Routes
Route::middleware(['web', 'auth'])
    ->prefix('admin/setting/paystack')
    ->name('admin.setting.paystack.')
    ->group(function () {
        Route::get('activate', [
            ConfigPaystackController::class, 'activate'
        ])->name('activate');

        Route::put('update', [
            ConfigPaystackController::class, 'update'
        ])->name('update');

        Route::get('deactivate', [
            ConfigPaystackController::class, 'deactivate'
        ])->name('deactivate');
    });
