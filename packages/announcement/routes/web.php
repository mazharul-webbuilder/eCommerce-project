<?php

use Illuminate\Support\Facades\Route;
use Incevio\Package\Announcement\Http\Controllers\AnnouncementController;


Route::middleware(['web','auth','admin','subscribed', 'checkBillingInfo'])->name('admin.setting.')->prefix('admin/setting')->group(function () {

    Route::get('announcement.read', [AnnouncementController::class, 'read'])
        ->name('announcement.read')->middleware('ajax');

    Route::resource('announcement', AnnouncementController::class)->except('show');

});
