<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;

Route::get( '/', Home::class )->name('home');
Route::get( '/about-us', Home::class )->name('about-us');
Route::get( '/products', Home::class )->name('products');
Route::get( '/price-list', Home::class )->name('price-list');
Route::get( '/contact-us', Home::class )->name('contact-us');