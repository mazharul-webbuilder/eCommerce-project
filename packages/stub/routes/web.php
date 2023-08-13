<?php

use Illuminate\Support\Facades\Route;
use Incevio\Package\Stub\Http\Controllers\StubController;

// Web Routes
Route::group([
    'middleware' => ['web'],
], function () {
    Route::get('package/stub/welcome', [StubController::class, 'index'])->name('stub.welcome');
});
