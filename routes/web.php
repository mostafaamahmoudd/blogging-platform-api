<?php

use Illuminate\Support\Facades\Route;

Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);
Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('posts', App\Http\Controllers\API\PostController::class);

    Route::post('/posts/{post}/comments', [App\Http\Controllers\API\CommentController::class, 'store']);
    Route::put('/comments/{comment}', [App\Http\Controllers\API\CommentController::class, 'update']);
    Route::delete('/comments/{comment}', [App\Http\Controllers\API\CommentController::class, 'destroy']);

    Route::get('/tags', [App\Http\Controllers\API\TagController::class, 'index']);
    Route::get('/tags/{tag}/posts', [App\Http\Controllers\API\TagController::class, 'getPosts']);

    Route::post('/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);
});

Route::apiResource('search', \App\Http\Controllers\API\SearchController::class);

Route::get('/posts', [\App\Http\Controllers\API\PostController::class, 'index']);
Route::get('/posts/{post}', [\App\Http\Controllers\API\PostController::class, 'show']);
