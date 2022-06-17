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

Route::get('/', \App\Http\Controllers\HomeController::class)->name('home');

Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'show'])
    ->middleware(['auth'])->name('profile');

Route::get('/messages', [\App\Http\Controllers\ProfileController::class, 'messages'])
    ->middleware(['auth'])->name('messages');

Route::get('/chat', [\App\Http\Controllers\ProfileController::class, 'chat'])
    ->middleware(['auth'])->name('messages');

Route::get('/video', [\App\Http\Controllers\ProfileController::class, 'video'])
    ->middleware(['auth'])->name('video');

Route::delete('/profile/{user}', [\App\Http\Controllers\ProfileController::class, 'delete'])
    ->middleware(['auth'])->name('profile.delete');

Route::get('/search', [\App\Http\Controllers\SearchController::class, 'search'])
    ->name('search');

Route::get('/search/result', [\App\Http\Controllers\SearchController::class, 'result'])
    ->name('search.result');

Route::post('/search/result/add', [\App\Http\Controllers\SearchController::class, 'add'])
    ->name('search.result.add');

Route::get('/search/result/delete/{search}', [\App\Http\Controllers\SearchController::class, 'delete'])
    ->name('search.result.delete');

require __DIR__ . '/auth.php';
