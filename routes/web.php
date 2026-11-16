<?php
use App\Http\Controllers\ContactController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('projects', [ProjectController::class, 'index']);

Route::view('/contact', 'contact')->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
