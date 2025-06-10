<?php

use Illuminate\Support\Facades\Route;

Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);
Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('posts', App\Http\Controllers\PostController::class);

    Route::apiResource('comments', App\Http\Controllers\CommentController::class);

    Route::apiResource('tags', App\Http\Controllers\TagController::class);

    Route::post('/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);
});

Route::get('/posts', [App\Http\Controllers\PostController::class, 'index']);
Route::get('/posts/{post}', [App\Http\Controllers\PostController::class, 'show']);
