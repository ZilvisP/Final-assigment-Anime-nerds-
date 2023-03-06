<?php

use App\Http\Controllers\Api\AnimeController;
use App\Http\Controllers\Api\MangaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/api/popular_anime', [AnimeController::class, 'popular']);
Route::get('/api/popular_manga', [MangaController::class, 'popular']);
Route::get('/api/new_anime', [AnimeController::class, 'newest']);
Route::get('/api/new_manga', [MangaController::class, 'newest']);



//
//Route::get('/Anime', [AnimeController::class, 'index']);
//Route::get('/Manga', [MangaController::class, 'index']);


//Route::get('/{anime}', [Api\AnimeController::class, 'show']);
//Route::get('/{manga}', [Api\MangaController::class, 'show']);
