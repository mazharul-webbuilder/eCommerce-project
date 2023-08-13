<?php

use Illuminate\Support\Facades\Route;
use Incevio\Package\SearchAutocomplete\Http\Controllers\SettingsController;
use Incevio\Package\SearchAutocomplete\Http\Controllers\AutocompleteController;

// Web Routes
Route::middleware(['web'])->group(function () {
    // Storefront routes
    Route::get('search/autocomplete', [
        AutocompleteController::class, 'autocomplete'
    ])->name('search.autocomplete')->middleware('storefront');

    // Admin routes
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('admin/setting/autocomplete', [
            SettingsController::class, 'settings'
        ])->name('admin.setting.autocomplete');

        Route::put('admin/setting/autocomplete/update', [
            SettingsController::class, 'update'
        ])->name('admin.setting.autocomplete.update');
    });
});
