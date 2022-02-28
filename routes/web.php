<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\TopicController;

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


Route::get('/message_create', [MessageController::class, 'create'])
    ->name('message.create');

Route::post('/message_store', [MessageController::class, 'store'])
    ->name('message.store');

Route::get('/message_read/{messageId}', [MessageController::class, 'read'])
    ->name('message.read');

Route::post('/message_update', [MessageController::class, 'update'])
    ->name('message.update');

Route::post('/message_delete', [MessageController::class, 'delete'])
    ->name('message.delete');


Route::get('/topic_create', [TopicController::class, 'create'])
    ->name('topic.create');

Route::post('/topic_store', [TopicController::class, 'store'])
    ->name('topic.store');

Route::get('/topic_read/{topicId}', [TopicController::class, 'read'])
    ->name('topic.read');

Route::post('/topic_update', [TopicController::class, 'update'])
    ->name('topic.update');

Route::post('/topic_delete', [TopicController::class, 'delete'])
    ->name('topic.delete');