<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('blog', 'blog')
    ->middleware(['auth', 'verified'])
    ->name('blog');

Route::view('blog', 'blog')
     ->middleware(['auth', 'verified'])
     ->name('blog');

Route::view('aktuell', 'aktuell')
    ->middleware(['auth', 'verified'])
    ->name('aktuell');

Route::view('contact', 'contact')
      ->middleware(['auth', 'verified'])
      ->name('contact');

Route::view('karriere', 'karriere')
       ->middleware(['auth', 'verified'])
       ->name('karriere');


Route::view('aboutus', 'aboutus')
    ->middleware(['auth'])
    ->name('aboutus', 'verified');

Route::view('impressum', 'impressum')
    ->middleware(['auth', 'verified'])
    ->name('impressum');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
