<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\FacebookController;

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

// Rotta delle FAQ
Route::get('/faq', [PublicController::class, 'faq'])->name('faq');

// Rotte per il login di Facebook

// Rotta che useremo quando si clicca su tasto facebook
Route::get('/auth/facebook/redirect', [FacebookController::class, 'redirect'])->name('facebook.redirect');
// Rotta che verrà usata da Facebook per riportarci sul nostro sito loggati
Route::get('/auth/facebook/callback', [FacebookController::class, 'callback'])->name('facebook.callback');

// Rotte di Google
// Rotta del click sul tasto
Route::get('/auth/google/redirect', [GoogleController::class, 'redirect'])->name('google.redirect');
// Rotta che verrà utilizzata da Google per riportarci sul nostro sito loggati
Route::get('/auth/google/callback', [GoogleController::class, 'callback'])->name('google.callback');