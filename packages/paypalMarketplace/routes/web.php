<?php

use Illuminate\Support\Facades\Route;
use Incevio\Package\PaypalMarketplace\Http\Controllers\PaymentController;
use Incevio\Package\PaypalMarketplace\Http\Controllers\ConfigPaypalMarketplaceController;
use Incevio\Package\PaypalMarketplace\Http\Controllers\WebhookController;

// Frontend Routes
Route::middleware(['web'])
    ->name('paypalMarketplace.')
    ->group(function () {
        Route::get('paypalMarketplace/{order}/paymentSuccess', [
            PaymentController::class, 'paymentSuccess'
        ])->name('orderPaymentsuccess')->middleware('storefront');

        Route::any('paypalMarketplace/webhook', [
            WebhookController::class, 'index'
        ])->name('webhook');
    });

// Onboarding Routes
Route::middleware(['web', 'auth'])
    ->prefix('admin/setting/paypalMarketplace')
    ->name('admin.setting.paypalMarketplace.')
    ->group(function () {
        Route::get('initiate', [
            ConfigPaypalMarketplaceController::class, 'initiate'
        ])->name('initiate');

        Route::post('connect', [
            ConfigPaypalMarketplaceController::class, 'connect'
        ])->name('connect');

        // Route::get('deactivate', [
        //     ConfigPaypalMarketplaceController::class, 'deactivate'
        // ])->name('deactivate');

        Route::get('redirect', [
            ConfigPaypalMarketplaceController::class, 'redirect'
        ])->name('redirect');

        Route::put('update', [
            ConfigPaypalMarketplaceController::class, 'update'
        ])->name('update');
    });
