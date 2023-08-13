<?php

use Illuminate\Support\Facades\Route;
use Incevio\Package\TrendingKeywords\Http\Controllers\TrendingKeywordsController;

// Web Routes
Route::middleware(['web', 'auth', 'admin'])
    ->name('admin.promotion.')->prefix('admin/promotions')
    ->group(function () {
        Route::get('trendingKeywords', [
            TrendingKeywordsController::class, 'index'
        ])->name('trendingKeywords');

        Route::put('trendingKeywords/update', [
            TrendingKeywordsController::class, 'update'
        ])->name('trendingKeywords.update');
    });
