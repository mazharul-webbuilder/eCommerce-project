<?php

use Illuminate\Support\Facades\Route;
use Incevio\Package\DynamicCommission\Http\Controllers\DynamicCommissionController;

// Web Routes
Route::middleware(['web', 'auth'])
    ->prefix('admin/setting')
    ->group(function () {
        Route::get('dynamicCommission', [
            DynamicCommissionController::class, 'index'
        ])->name(config('dynamicCommission.routes.settings'));

        Route::post('dynamicCommission/update', [
            DynamicCommissionController::class, 'updateCommission'
        ])->name(config('dynamicCommission.routes.update'));
    });
