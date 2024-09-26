<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Models\User;
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

Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/books', [BookController::class, 'index'])->name('books');
Route::get('/', [BookController::class, 'index'])->name('index');
Route::get('/createbook', [BookController::class, 'createBook'])->name('createbook');
Route::get('/editbook', [BookController::class, 'editBook'])->name('editbook');

// TODO-1-2 (DONE) Remplacer la route "welcome" par la route "home" affichant le hello world

// TODO-7-1 Créer une route pour "order" en s'inspirant de la route "home"

// TODO-4-2 (DONE) Ajouter la ressource BookController aux routes
