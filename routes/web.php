<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

// Homepage
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// Creazione articolo
Route::get('/create/article', [ArticleController::class, 'create'])->name('create.article');

// Article index
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');

// Rotta parametrica article
Route::get('/show/article/{article}', [ArticleController::class, 'show'])->name('article.show');

// Rotta parametrica category
Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');

// Rotta dei revisors
Route::get('revisor/index', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');

// Rotta accept
Route::patch('/accept/{article}', [RevisorController::class, 'accept'])->name('accept');

// Rotta reject
Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject');

// Rotta mail
Route::get('/revisor/request', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');

// Make
Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

// Rotta ricerca articoli
Route::get('/search/article', [PublicController::class, 'searchArticles'])->name('article.search');

// Rotta cambio lingua
Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');