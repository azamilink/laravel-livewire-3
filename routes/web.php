<?php

use App\Livewire\Form;
use App\Livewire\Home;
use App\Livewire\Post;
use App\Livewire\User;
use App\Livewire\Action;
use App\Livewire\Images;
use App\Livewire\Contact;
use App\Livewire\Product;
use App\Livewire\Uploaps;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;

Route::get('/', fn () => view('welcome'));
Route::get('home/{name?}', Home::class);
Route::get('post', Post::class);
Route::get('user', User::class);
Route::get('form', Form::class);
Route::get('action', Action::class);
Route::get('product', Product::class);
Route::get('contact', Contact::class);
Route::get('upload', Uploaps::class);
Route::get('images', Images::class);

Route::middleware('auth')->group(function () {
    Route::get('about', \App\Livewire\About::class)->name('about');
    Route::get('timeline', \App\Livewire\Timeline::class)->name('timeline');

    Route::get('users', \App\Livewire\Users\Index::class)->name('users.index');
    Route::get('users/{user}', \App\Livewire\Users\Show::class)->name('users.show');

    Route::post('logout', LogoutController::class)->name('logout');
});

Route::get('login', \App\Livewire\Login::class)->name('login')->middleware('guest');
