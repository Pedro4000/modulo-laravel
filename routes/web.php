<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UtilisateurController;

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

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/register', [HomeController::class, 'register'])
    ->name('register');

Route::post('/register_store', [UtilisateurController::class, 'store'])
    ->name('register.store');

Route::post('/login_attempt', [UtilisateurController::class, 'store'])
    ->name('login.attempt');

Route::get('/login', [UtilisateurController::class, 'login'])
    ->name('login');
