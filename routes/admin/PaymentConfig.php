<?php

use App\Http\Controllers\Admin\ConfigAuthorizeNetController;
use App\Http\Controllers\Admin\ConfigCyberSourceController;
use App\Http\Controllers\Admin\ConfigInstamojoController;
use App\Http\Controllers\Admin\ConfigPaypalExpressController;
use App\Http\Controllers\Admin\ConfigPaystackController;
use App\Http\Controllers\Admin\ConfigStripeController;
use App\Http\Controllers\Admin\PaymentMethodController;
use Illuminate\Support\Facades\Route;

// General
Route::get('paymentMethod', [PaymentMethodController::class, 'index'])->name('config.paymentMethod.index');

Route::get('paymentMethod/{paymentMethod}/activate', [PaymentMethodController::class, 'activate'])->name('paymentMethod.activate');

Route::get('paymentMethod/{paymentMethod}/deactivate', [PaymentMethodController::class, 'deactivate'])->name('paymentMethod.deactivate');

// Manual
Route::get('manualPaymentMethod/{code}/activate', [PaymentMethodController::class, 'activateManualPaymentMethod'])->name('manualPaymentMethod.activate');

Route::put('manualPaymentMethod/{code}/update', [PaymentMethodController::class, 'updateManualPaymentMethod'])->name('manualPaymentMethod.update');

Route::get('manualPaymentMethod/{code}/deactivate', [PaymentMethodController::class, 'deactivateManualPaymentMethod'])->name('manualPaymentMethod.deactivate');

// Stripe
Route::get('stripe/connect', [ConfigStripeController::class, 'connect'])->name('stripe.connect');

Route::get('stripe/redirect', [ConfigStripeController::class, 'redirect'])->name('stripe.redirect');

Route::get('stripe/disconnect', [ConfigStripeController::class, 'disconnect'])->name('stripe.disconnect');

// Instamojo

// CyberSource
Route::get('cybersource/activate', [ConfigCyberSourceController::class, 'activate'])->name('cybersource.activate');

Route::put('cybersource/{cybersource}/update', [ConfigCyberSourceController::class, 'update'])->name('cybersource.update');

Route::get('cybersource/deactivate', [ConfigCyberSourceController::class, 'deactivate'])->name('cybersource.deactivate');

// PayPal
Route::get('paypalExpress/activate', [ConfigPaypalExpressController::class, 'activate'])->name('paypalExpress.activate');

Route::put('paypalExpress/{paypalExpress}/update', [ConfigPaypalExpressController::class, 'update'])->name('paypalExpress.update');

Route::get('paypalExpress/deactivate', [ConfigPaypalExpressController::class, 'deactivate'])->name('paypalExpress.deactivate');
