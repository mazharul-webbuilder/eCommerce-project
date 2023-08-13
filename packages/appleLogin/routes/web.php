<?php

use Illuminate\Support\Facades\Route;
use Incevio\Package\AppleLogin\Http\Controllers\AppleLoginController;

// Web Routes
Route::middleware(['web','storefront'])
    ->namespace('Storefront')->group(function () {

        Route::get('socialite/customer/{provider}', [
            AppleLoginController::class, 'redirectToProvider'
        ])->name('socialite.customer');

        Route::any('socialite/customer/{provider}/callback', [
            AppleLoginController::class, 'handleProviderCallback'
        ])->name('socialite.customer.callback');

    });

