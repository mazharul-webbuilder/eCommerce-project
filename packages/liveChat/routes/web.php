<?php

use Illuminate\Support\Facades\Route;
use Incevio\Package\LiveChat\Http\Controllers\AdminChatController;
use Incevio\Package\LiveChat\Http\Controllers\ChatController;

Route::middleware(['ajax','storefront','web'])->name('chat.')->group(function () {
    Route::get('chat/{shop}', [
        ChatController::class, 'conversation'
    ])->name('conversation');

    Route::post('chat', [
        ChatController::class, 'save'
    ])->name('start');
});


//admin suport chat route
Route::middleware(['web','auth','subscribed', 'checkBillingInfo'])->name('admin.support.')->prefix('admin/support')->group(function () {
    Route::get('chat', [AdminChatController::class, 'index'])->name('chat_conversation.index');

    Route::get('chat/{chat}', [AdminChatController::class, 'show'])->name('chat_conversation.show');

    Route::post('chat/{chat}/reply', [AdminChatController::class, 'reply'])->name('chat_conversation.reply');

// Route::delete('chat/{chat}/trash', [AdminChatController::class, 'trash'])->name('chat_conversation.trash'); // Chat move to trash

// Route::post('chat/{chat}/restore', [AdminChatController::class, 'restore'])->name('chat_conversation.restore');

// Route::delete('chat/{chat}/destroy', [AdminChatController::class, 'destroy'])->name('chat_conversation.destroy');

});