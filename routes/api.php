<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// auth
Route::prefix('auth')->group(function(){
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::group(['middleware' => ['auth:sanctum']], function(){

});

Route::get("/users", [UserController::class, 'index']);
Route::get("/users/{id}", [UserController::class, 'show']);
Route::get("/jobs", [JobsController::class, 'index']);
Route::get("/jobs/{id}", [JobsController::class, 'show']);
Route::put("/jobs/{id}", [JobsController::class, 'update']);
