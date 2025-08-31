<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/token/{fe}', function (String $fe) {
    return ['token' => \App\Models\User::query()->inRandomOrder()->first()->createToken($fe)->plainTextToken];
});
