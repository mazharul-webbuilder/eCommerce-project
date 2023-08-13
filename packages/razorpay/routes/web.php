<?php

use Illuminate\Support\Facades\Route;
use Incevio\Package\Razorpay\Http\Controllers\PaymentController;
use Incevio\Package\Razorpay\Http\Controllers\ConfigRazorpayController;

// Web Routes
Route::middleware(['web'])->group(function () {
    // Frontend Routes
    Route::post('razorpay/payment/request/{cart?}', [
        PaymentController::class, 'request'
    ])->name('razorpay.payment.request');

    // Admin Routes
    Route::middleware(['auth'])
        ->prefix('admin/setting/razorpay')
        ->name('admin.setting.razorpay.')->group(function () {
            Route::get('activate', [
                ConfigRazorpayController::class, 'activate'
            ])->name('activate');

            Route::put('update', [
                ConfigRazorpayController::class, 'update'
            ])->name('update');

            Route::get('deactivate', [
                ConfigRazorpayController::class, 'deactivate'
            ])->name('deactivate');
        });
});

// API routes
Route::middleware(['api'])->prefix('api')->group(function () {
    Route::post('razorpay/payment/request/{cart?}', [
        PaymentController::class, 'request'
    ]);
});
