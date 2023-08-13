<?php

use Illuminate\Support\Facades\Route;
use Incevio\Package\Wishlist\Http\Controllers\WishlistController;

Route::middleware(['web', 'storefront', 'auth:customer'])->namespace('Storefront')->group(function () {
    Route::get('wishlist/{item}', [
        WishlistController::class, 'add'
    ])->name('wishlist.add')->middleware(['ajax']);

    Route::delete('wishlist/{wishlist}', [
        WishlistController::class, 'remove'
    ])->name('wishlist.remove');
});
