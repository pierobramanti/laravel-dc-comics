<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

Route::get('/', function () {
    return view('home');
})->name('homepage');



Route::resource('comics', ComicController::class);
