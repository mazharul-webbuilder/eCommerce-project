<?php


use Illuminate\Support\Facades\Route;
use Incevio\Package\GoogleLogin\Http\Controllers\GoogleLoginController;

Route::middleware(['web','storefront'])
    ->namespace('Storefront')->group(function () {

        Route::get('socialite/customer/google', [
            GoogleLoginController::class, 'redirectToProvider'
        ])->name('socialite.customer.google');

        Route::any('socialite/customer/google/callback', [
            GoogleLoginController::class, 'handleProviderCallback'
        ])->name('socialite.customer.google.callback');

    });