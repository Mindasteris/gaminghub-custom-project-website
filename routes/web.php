<?php

use App\Http\Controllers\CommunityController;
use App\Http\Controllers\ContactController;
use App\Models\Community;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Home
Route::view('/', 'index')->name('index');

// Gaming
Route::view('/gaming', 'gaming')->name('gaming');

// Services
Route::view('/services', 'services')->name('services');

// Community
Route::resource('/community', CommunityController::class, ['names' => 'community']);

// About
Route::view('/about', 'about')->name('about');

// Contacts
Route::get('/contacts', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contacts', [ContactController::class, 'store'])->name('contact.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');