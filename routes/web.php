<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('contact', ContactController::class)->names('contact');
