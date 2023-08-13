<?php

use Illuminate\Support\Facades\Route;
use Incevio\Package\Wallet\Http\Controllers\WalletController;
use Incevio\Package\Wallet\Http\Controllers\DepositController;
use Incevio\Package\Wallet\Http\Controllers\TransferController;
use Incevio\Package\Wallet\Http\Controllers\WithdrawalController;
use Incevio\Package\Wallet\Http\Controllers\Admin\WalletSettingsController;
use Incevio\Package\Wallet\Http\Controllers\Admin\WithdrawalRequestController;
use Incevio\Package\Wallet\Http\Controllers\Admin\PayoutController;
use Incevio\Package\Wallet\Http\Controllers\Admin\PayoutReportController;

// use Incevio\Package\Wallet\Http\Controllers\Admin\DepositRequestController;

// Markerplace web only routes
Route::middleware(['web'])->group(function () {
    // Admin routes
    Route::middleware(['auth'])->prefix('admin')
        ->name('admin.')->group(function () {
            // Payout
            Route::get('payouts', [
                PayoutController::class, 'index'
            ])->name('wallet.payouts');

            Route::get('payout/requests', [
                WithdrawalRequestController::class, 'index'
            ])->name('wallet.payout.requests');

            Route::get('payout/form', [
                PayoutController::class, 'show_form'
            ])->name('wallet.payout');

            Route::get('payout/{transaction}/approval', [
                WithdrawalRequestController::class, 'show_form'
            ])->name('payout.approval');

            Route::post('payout/{transaction}/approve', [
                WithdrawalRequestController::class, 'approve'
            ])->name('payout.approve');

            Route::post('payout/{transaction}/decline', [
                WithdrawalRequestController::class, 'decline'
            ])->name('payout.decline');

            Route::post('wallet/payout', [
                PayoutController::class, 'payout'
            ])->name('wallet.payout.submit');

            //Deposit
            // Route::get('deposit/requests', [
            //     DepositRequestController::class, 'index'
            // ])->name('wallet.deposit.requests');

            // Route::get('deposit/{transaction}/approval', [
            //     DepositRequestController::class, 'show_form'
            // ])->name('deposit.approval');

            // Route::post('deposit/{transaction}/approve', [
            //     DepositRequestController::class, 'approve'
            // ])->name('wallet.deposit.approve');

            // Route::post('deposit/{transaction}/decline', [
            //     DepositRequestController::class, 'decline'
            // ])->name('wallet.deposit.decline');

            // Settings
            Route::get('setting/wallet', [
                WalletSettingsController::class, 'index'
            ])->name('admin.wallet.settings');

            //Reports
            Route::get('report/payout', [
                PayoutReportController::class, 'report'
            ])->name('wallet.payout.report');

            Route::get('report/payout/getMore', [
                PayoutReportController::class, 'reportGetMore'
            ])->name('wallet.payout.report.getMore');

            Route::get('report/payout/getMoreChart', [
                PayoutReportController::class, 'reportGetMoreForChart'
            ])->name('wallet.payout.report.getMoreChart');
        });

    // Merchant routes
    Route::middleware(['merchant', 'auth'])->prefix('admin')
        ->name('merchant.')->group(function () {
            Route::get('wallet', [
                WalletController::class, 'index'
            ])->name('wallet');

            // Withdrawals 
            Route::get('wallet/withdraw', [
                WithdrawalController::class, 'form'
            ])->name('wallet.withdrawal');

            Route::post('wallet/withdraw', [
                WithdrawalController::class, 'withdraw'
            ])->name('wallet.withdraw');

            // Deposits 
            Route::get('wallet/deposit', [
                DepositController::class, 'show_form'
            ])->name('wallet.deposit.form');

            Route::post('wallet/deposit', [
                DepositController::class, 'deposit'
            ])->name('wallet.deposit');

            // Transfers
            Route::get('wallet/transfer', [
                TransferController::class, 'show_form'
            ])->name('wallet.transfer_form');

            Route::post('wallet/transfer', [
                TransferController::class, 'transfer'
            ])->name('wallet.transfer');
        });

    // Customer routes for storefront
    Route::middleware(['auth:customer', 'storefront'])
        ->name('customer.account.')->group(function () {
            Route::get('account/wallet', [
                WalletController::class, 'index'
            ])->name('wallet');

            Route::get('account/wallet/deposit/form', [
                DepositController::class, 'show_form'
            ])->name('wallet.deposit.form');

            Route::post('account/wallet/deposit', [
                DepositController::class, 'deposit'
            ])->name('wallet.deposit');

            // Transfer
            Route::get('account/wallet/transfer/form', [
                TransferController::class, 'show_form'
            ])->name('wallet.transfer.form');

            Route::post('account/wallet/transfer', [
                TransferController::class, 'transfer'
            ])->name('wallet.transfer');
        });

    // Common Routes
    Route::name('wallet.')->group(function () {
        Route::get('wallet/{transaction}/invoice', [
            WalletController::class, 'invoice'
        ])->name('transaction.invoice');

        // Paypal and Paystack redirect routes
        Route::get('wallet/depositFailed', [
            DepositController::class, 'paymentFailed'
        ])->name('deposit.failed');

        Route::get('wallet/depositSuccessPaypal', [
            DepositController::class, 'paypalPaymentSuccess'
        ])->name('deposit.paypal.success');

        Route::get('wallet/depositSuccessPaystack', [
            DepositController::class, 'paystackPaymentSuccess'
        ])->name('deposit.paystack.success');

        Route::post('wallet/sslcommerzdeposit', [
            DepositController::class, 'sslcommerzPaymentSuccess'
        ])->name('deposit.sslcommerz.success');

        Route::any('wallet/flutterwavedeposit', [
            DepositController::class, 'flutterwavePaymentRedirect'
        ])->name('deposit.flutterwave.redirect');

        Route::any('wallet/instamojodeposit', [
            DepositController::class, 'instamojoPaymentSuccess'
        ])->name('deposit.instamojo.success');
    });
});
