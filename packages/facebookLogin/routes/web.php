<?php


use Illuminate\Support\Facades\Route;
use Incevio\Package\FacebookLogin\Http\Controllers\FacebookLoginController;

Route::middleware(['web','storefront'])
    ->namespace('Storefront')->group(function () {

        Route::get('socialite/customer/facebook', [
            FacebookLoginController::class, 'redirectToProvider'
        ])->name('socialite.customer.facebook');

        Route::any('socialite/customer/facebook/callback', [
            FacebookLoginController::class, 'handleProviderCallback'
        ])->name('socialite.customer.facebook.callback');

    });