<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('posts', App\Http\Controllers\PostController::class);

    Route::apiResource('comments', App\Http\Controllers\CommentController::class);

    Route::apiResource('tags', App\Http\Controllers\TagController::class);
});
