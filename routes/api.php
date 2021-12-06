<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShareController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('/v1/user',UserController::class);
Route::apiResource('/v1/share',ShareController::class);
Route::apiResource('/v1/comment',CommentController::class);
Route::apiResource('/v1/like',LikeController::class)->only([
    'store'
]);
