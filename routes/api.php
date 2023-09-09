<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\UserController;

Route::group(['prefix' => 'v1'], function() {
    Route::apiResource('users', UserController::class);
});
