<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Models\Article;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articulos',[ArticleController::class, 'index'])->name('articles.list');
Route::get('/articulos/{article}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/form-articulos',[ArticleController::class, 'create'])->name('articles.form');

