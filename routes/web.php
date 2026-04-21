<?php

use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;


Route::get('/', fn () => view('welcome'));

Route::resource('authors', AuthorController::class);