<?php

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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('players/{player}', \App\Livewire\Player\Show::class)
    ->middleware(['auth', 'verified'])
    ->name('players.show');

Route::get('players/{player}/at-bats/create', \App\Livewire\AtBat\Create::class)
    ->middleware(['auth', 'verified'])
    ->name('at-bats.create');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
