<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiTokenController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\HallController;
use App\Http\Controllers\SessController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\TicketController;




Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/token', [ApiTokenController::class, 'createToken']);

Route::get('/sess/{id}', [SessController::class, 'show']);
Route::get('/halls/{id}', [HallController::class, 'show']);
Route::get('/movies/{id}', [MovieController::class, 'show']);
Route::get('/places/{id}', [PlaceController::class, 'show']);

Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::apiResource('/movies', App\Http\Controllers\MovieController::class);
    Route::apiResource('/halls', App\Http\Controllers\HallController::class);
    Route::apiResource('/sess', App\Http\Controllers\SessController::class);
    Route::apiResource('/places', App\Http\Controllers\PlaceController::class);
});
Route::apiResource('/tickets', App\Http\Controllers\TicketController::class);

Route::get('/movies', [MovieController::class, 'index']);
Route::get('/halls', [HallController::class, 'index']);
Route::get('/sess', [SessController::class, 'index']);
Route::get('/places', [PlaceController::class, 'index']);

