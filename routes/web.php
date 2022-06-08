<?php

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

Route::get('/', function () {
    return redirect()->route('profile');
})->name('home');

Route::get('/profile', \App\Http\Controllers\ProfileController::class)
    ->middleware(['auth'])->name('profile');

Route::get('/search', [\App\Http\Controllers\SearchController::class, 'search'])
    ->name('search');

Route::get('/search/result', [\App\Http\Controllers\SearchController::class, 'result'])
    ->name('search.result');

require __DIR__ . '/auth.php';
