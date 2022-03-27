<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Auth\GitHubController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use TCG\Voyager\Facades\Voyager;

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





Route::get('/', [MainController::class, 'home'])->name('home');


// Tous les articles
Route::get('/articles', [MainController::class, 'index'])->name('articles');

// Un seul article
Route::get('/articles/{article:title}', [MainController::class, 'show'])->name('article');


Auth::routes();

/* Route::prefix('admin')->middleware('admin')->group(function() {
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/articles/{article}/update', [ArticleController::class, 'update'])->name('articles.update');
Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');
Route::delete('/articles/{article}/delete', [ArticleController::class, 'delete'])->name('articles.delete');
}); */

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/auth/github', [GitHubController::class, 'auth'])->name('github.auth');
Route::get('/auth/github/redirect', [GitHubController::class, 'redirect'])->name('github.redirect');
