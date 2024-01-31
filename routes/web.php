<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;

// Route::get('/', fn () => view('welcome'));

Route::middleware('auth')->group(function () {
    Route::get('/', \App\Livewire\Home::class)->name('home');
    Route::get('about', \App\Livewire\About::class)->name('about');
    Route::get('contact', \App\Livewire\Contact::class)->name('contact');
    Route::get('timeline', \App\Livewire\Timeline::class)->name('timeline');

    Route::get('users', \App\Livewire\Users\Index::class)->name('users.index');
    Route::get('users/{user}', \App\Livewire\Users\Show::class)->name('users.show');

    Route::post('logout', LogoutController::class)->name('logout');
});

Route::get('login', \App\Livewire\Login::class)->name('login')->middleware('guest');
