<?php

use App\Http\Controllers\Api\AnimeController;
use App\Http\Controllers\Api\MangaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/api/popular_anime', [AnimeController::class, 'popular']);
Route::get('/api/popular_manga', [MangaController::class, 'popular']);
Route::get('/api/new_anime', [AnimeController::class, 'newest']);
Route::get('/api/new_manga', [MangaController::class, 'newest']);
