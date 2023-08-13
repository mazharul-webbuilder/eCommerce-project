<?php

use Illuminate\Support\Facades\Route;
use Incevio\Package\Zipcode\Http\Controllers\ZipcodeController;
use Incevio\Package\Zipcode\Http\Controllers\StorefrontController;

// Web Routes
Route::group([
	'middleware' => ['web','auth','admin'],
], function(){

    Route::get('admin/setting/zipcode', [ZipcodeController::class, 'index'])->name(config('zipcode.routes.settings'));
    Route::get('admin/zipcode/search', [ZipcodeController::class, 'searchZipcode'])->name('admin.zipcode.search')->middleware('ajax');

    Route::post('admin/zipcode/update', [ZipcodeController::class, 'updateDefaultZipcode'])->name('admin.zipcode.update');
    Route::post('admin/zipcode/create', [ZipcodeController::class, 'createZipcode'])->name('admin.zipcode.create');

    //Csv Upload
   /* Route::get('admin/zipcode/bulk', [ZipcodeController::class, 'importZipcode'])->name('admin.zipcode.bulk')->middleware('ajax');
    Route::get('admin/zipcode/downloadTemplate', [ZipcodeController::class, 'downloadTemplate'])->name('admin.zipcode.downloadTemplate');

    Route::post('admin/zipcode/upload', [ZipcodeController::class, 'uploadZipcode'])->name('admin.zipcode.upload');*/

});

// Web Storefront
Route::group([
	'middleware' => ['web', 'storefront'],
], function(){

    Route::get('zipcode', [StorefrontController::class, 'modal'])->name(config('zipcode.routes.shipTo'));
    Route::get('zipcode/search', [StorefrontController::class, 'searchZipcode'])->name(config('zipcode.routes.searchZipcode'))->middleware('ajax');
    Route::post('zipcode/update', [StorefrontController::class, 'updateZipcode'])->name(config('zipcode.routes.updateZipcode'));

});