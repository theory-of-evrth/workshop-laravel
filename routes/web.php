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
Route::get('/books/{id?}/{action?}', [BookController::class, 'index'])->name('books');
Route::delete('books/{id}/delete', [BookController::class, 'destroy'])->name('books.destroy');
Route::put('books/{id}/edit', [BookController::class, 'update'])->name('books.update');
Route::post('books', [BookController::class, 'store'])->name('books.store');
Route::get('/', [BookController::class, 'index'])->name('index');
Route::get('/createbook', [BookController::class, 'createBook'])->name('createbook');

// TODO-1-2 (DONE) Remplacer la route "welcome" par la route "home" affichant le hello world

// TODO-7-1 Créer une route pour "order" en s'inspirant de la route "home"

// TODO-4-2 (DONE) Ajouter la ressource BookController aux routes
