<?php

use Illuminate\Support\Facades\Route;
use Incevio\Package\Packaging\Http\Controllers\PackagingController;


Route::middleware(['web','auth','subscribed', 'checkBillingInfo'])->name('admin.shipping.')->prefix('admin/shipping')->group(function () {

Route::post('packaging/massTrash', [PackagingController::class, 'massTrash'])->name('packaging.massTrash')->middleware('demoCheck');

Route::post('packaging/massDestroy', [PackagingController::class, 'massDestroy'])->name('packaging.massDestroy')->middleware('demoCheck');

Route::delete('packaging/emptyTrash', [PackagingController::class, 'emptyTrash'])->name('packaging.emptyTrash');

Route::delete('packaging/{packaging}/trash', [PackagingController::class, 'trash'])->name('packaging.trash'); // packaging move to trash

Route::get('packaging/{packaging}/restore', [PackagingController::class, 'restore'])->name('packaging.restore');

Route::resource('packaging', PackagingController::class)->except('show');

});