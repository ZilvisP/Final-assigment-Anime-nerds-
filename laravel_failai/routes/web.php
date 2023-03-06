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
use App\Http\Middleware\FromDojo;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('home');
//});

Route::get('/', HomeController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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
