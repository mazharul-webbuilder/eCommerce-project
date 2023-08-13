<?php

use Illuminate\Support\Facades\Route;
use Incevio\Package\Eventy\Http\Controllers\AdminController;
use Incevio\Package\Eventy\Http\Controllers\EventController;

// Web Routes
Route::group(['middleware' => ['web']], function(){

	Route::group(['middleware' => ['storefront']], function(){
    	Route::get('events', [EventController::class, 'index'])->name('events');
    	Route::get('event/{event}', [EventController::class, 'show'])->name('event.show');

    	Route::any('event/book/{event}', [EventController::class, 'eventBook'] )->name('event.book')->middleware('auth:customer');
    	Route::any('event/cancel/{event}', [EventController::class, 'cancelBook'] )->name('event.cancel')->middleware('auth:customer');
	});

    // Admin routes
    Route::get('admin/utility/event', [AdminController::class, 'index'])->name('event.index');
    Route::get('admin/utility/event/create', [AdminController::class, 'create'])->name('event.create')->middleware('ajax');
    Route::post('admin/utility/event/create', [AdminController::class, 'store'])->name('event.store');
    Route::get('admin/utility/event/{event}/edit', [AdminController::class, 'edit'])->name('event.edit')->middleware('ajax');
    Route::put('admin/utility/event/{event}/update', [AdminController::class, 'update'])->name('event.update');
    Route::delete('admin/utility/event/{event}/destroy', [AdminController::class, 'destroy'])->name('event.destroy');
    Route::get('admin/utility/event/user/{event}', [AdminController::class, 'eventUser'])->name('event.user');
    Route::delete('admin/utility/event/user/remove/{event}/{customer}', [AdminController::class, 'cancelBook'])->name('event.user.remove');

});