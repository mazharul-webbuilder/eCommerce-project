<?php

use Illuminate\Support\Facades\Route;
use Incevio\Package\MPesa\Http\Controllers\ResponseController;
use Incevio\Package\MPesa\Http\Controllers\PaymentController;
use Incevio\Package\MPesa\Http\Controllers\ConfigMPesaController;

Route::post('payment/response/callback', [ResponseController::class, 'callback']);

// Storefron Routes
Route::middleware(['web', 'storefront'])
  ->name('mpesa.order.')->group(function () {
    Route::get('mpesa/{order}/confirmation', [
      PaymentController::class, 'showConfirmationForm'
    ])->name('confirmation');

    Route::post('mpesa/{order}/confirmation', [
      PaymentController::class, 'confirm'
    ])->name('confirm');
  });

// Admin Routes
Route::middleware(['web', 'auth'])
  ->prefix('admin/setting/mpesa')
  ->name('admin.setting.mpesa.')->group(function () {
    Route::get('activate', [
      ConfigMPesaController::class, 'activate'
    ])->name('activate');

    Route::put('update', [
      ConfigMPesaController::class, 'update'
    ])->name('update');

    Route::get('deactivate', [
      ConfigMPesaController::class, 'deactivate'
    ])->name('deactivate');
  });

// Route::group(
//   ['middleware' => ['web', 'storefront'],],
//   function () {
//     Route::get('mpesa/{order}/confirmation', [
//       PaymentController::class, 'showConfirmationForm'
//     ])->name('mpesa.order.confirmation');

//     Route::post('mpesa/{order}/confirmation', [
//       PaymentController::class, 'confirm'
//     ])->name('mpesa.order.confirm');
//   }
// );