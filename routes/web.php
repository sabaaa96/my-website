<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YoutubeVideoController;

//Route::view('/', 'welcome')
//->name('welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('blog-post-form', 'blog-post-form')
     ->middleware(['auth', 'verified'])
     ->name('blog-post-form');

Route::view('blog-post-details/{id}', 'blog-post-details')
    ->name('blog-post-details');

Route::get('aktuell', [YoutubeVideoController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('aktuell');


Route::view('contact', 'contact')
      ->middleware(['auth', 'verified'])
      ->name('contact');

Route::view('karriere', 'karriere')
       ->middleware(['auth', 'verified'])
       ->name('karriere');


Route::view('aboutme', 'about-me')
    ->middleware(['auth'])
    ->name('aboutme', 'verified');

Route::view('impressum', 'impressum')
    ->middleware(['auth', 'verified'])
    ->name('impressum');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
