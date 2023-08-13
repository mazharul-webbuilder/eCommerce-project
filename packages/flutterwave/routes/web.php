<?php


use Illuminate\Support\Facades\Route;
use Incevio\Package\FlutterWave\Http\Controllers\ConfigFlutterWaveController;
use Incevio\Package\FlutterWave\Http\Controllers\FlutterWavePaymentController;

// Web Routes
Route::middleware(['web', 'storefront'])->group(function () {
    Route::any('flutterwave/order/{order}/redirect', [
        FlutterWavePaymentController::class, 'redirect'
    ])->name('flutterwave.order.redirect');
});

// Admin Routes
Route::middleware(['web', 'auth'])
    ->prefix('admin/setting/flutterwave')
    ->name('admin.setting.flutterwave.')
    ->group(function () {
        Route::get('activate', [
            ConfigFlutterWaveController::class, 'activate'
        ])->name('activate');

        Route::put('update', [
            ConfigFlutterWaveController::class, 'update'
        ])->name('update');

        Route::get('deactivate', [
            ConfigFlutterWaveController::class, 'deactivate'
        ])->name('deactivate');
    });
