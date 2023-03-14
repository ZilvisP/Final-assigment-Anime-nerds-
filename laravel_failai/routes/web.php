<?php

use App\Http\Controllers\Admin\AnimeController;
use App\Http\Controllers\Admin\AnimeMangaGenreController;
use App\Http\Controllers\Admin\GenresController;
use App\Http\Controllers\Admin\GlobalStatusesController;
use App\Http\Controllers\Admin\MangaController;
use App\Http\Controllers\Admin\UserAnimeController;
use App\Http\Controllers\Admin\UserMangaController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\UserStatusesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicAnimeController;
use App\Http\Controllers\PublicMangaController;
use App\Http\Middleware\FromDojo;
use Illuminate\Support\Facades\Route;



Route::get('/', HomeController::class);


Route::get('/anime', [PublicAnimeController::class, 'index'])->name('PublicAnime.index');
Route::get('/manga', [PublicMangaController::class, 'index'])->name('PublicManga.index');




Route::put('/anime/{anime}/status', [PublicAnimeController::class, 'updateStatus'])->middleware('auth');





//Route::put('/anime/{anime}/status', [PublicAnimeController::class, 'updateStatus'])->name('public.anime.status.update');
//Route::put('/anime/{anime}/status', [PublicAnimeController::class, 'updateStatus'])->name('anime.status.update');
//Route::put('/manga/{manga}/status', [PublicMangaController::class, 'updateStatus'])->name('manga.status.update');



Route::get('/anime/{anime}', [PublicAnimeController::class, 'show'])->name('PublicAnime.show');
Route::get('/manga/{manga}', [PublicMangaController::class, 'show'])->name('PublicManga.show');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'dojo', 'middleware' => ['auth', 'verified', FromDojo::class]], function () {
    Route::resources([
        'anime' => AnimeController::class,
        'animemangagenres' => AnimeMangaGenreController::class,
        'genres' => GenresController::class,
        'globalstatuses' => GlobalStatusesController::class,
        'manga' => MangaController::class,
        'useranime' => UserAnimeController::class,
        'usermanga' => UserMangaController::class,
        'users' => UsersController::class,
        'userstatuses' => UserStatusesController::class]);
});



require __DIR__ . '/auth.php';
