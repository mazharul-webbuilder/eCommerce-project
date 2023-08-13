<?php

use Illuminate\Support\Facades\Route;
use Incevio\Package\GoogleAnalytics\Http\Controllers\GoogleAnalyticsController;

// Web Routes
Route::middleware(['web', 'auth', 'admin'])
    ->group(function () {
        Route::get('admin/report/googleAnalytics', [
            GoogleAnalyticsController::class, 'index'
        ])->name('admin.report.googleAnalytics');
    });
