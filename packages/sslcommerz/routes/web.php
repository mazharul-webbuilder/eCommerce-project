<?php

use Illuminate\Support\Facades\Route;
use Incevio\Package\SslCommerz\Http\Controllers\ConfigSslCommerzController;
use Incevio\Package\SslCommerz\Http\Controllers\SslCommerzPaymentController;

// Web Routes
Route::middleware(['web', 'storefront'])->group(function () {
    Route::post('sslcommerz/order/{order}/success', [
        SslCommerzPaymentController::class, 'success'
    ])->name('sslCommerz.order.success');
});

// Admin Routes
Route::middleware(['web', 'auth'])
    ->prefix('admin/setting/sslcommerz')
    ->name('admin.setting.sslcommerz.')->group(function () {
        Route::get('activate', [
            ConfigSslCommerzController::class, 'activate'
        ])->name('activate');

        Route::put('update', [
            ConfigSslCommerzController::class, 'update'
        ])->name('update');

        Route::get('deactivate', [
            ConfigSslCommerzController::class, 'deactivate'
        ])->name('deactivate');
    });

// API routes
// Route::group(['middleware' => ['api'], 'prefix' => 'api'], function () {
//     Route::post('sslCommerz/payment/request/{cart?}', [
//         SslCommerzPaymentController::class, 'request'
//     ]);
// });
