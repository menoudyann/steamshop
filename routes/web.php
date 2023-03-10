<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [GameController::class, 'index'])->name('games');

Route::resource('/games', GameController::class)->only(['index', 'show', 'create']);

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/library/store', [LibraryController::class, 'store'])->name('library.store');
    Route::resource('/library', LibraryController::class)->except('update', 'edit', 'destroy');
    Route::resource('/games', GameController::class)->only(['create', 'store', 'edit', 'update', 'destroy']);
    Route::get('/updateBalance', function () {
        return view('profile.addBalance');
    })->name('updateBalance');
    Route::post('profile/addBalance', [ProfileController::class, 'addBalance'])->name('profile.addBalance');
});

require __DIR__ . '/auth.php';
