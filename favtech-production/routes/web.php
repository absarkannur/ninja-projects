<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\ProductsPage;
use App\Livewire\PriceListPage;
use App\Livewire\RegisterPage;
use App\Livewire\SigninPage;
use App\Livewire\SignoutPage;


Route::get( '/', Home::class )->name('home');
Route::get( '/about-us', About::class )->name('about-us');
Route::get( '/products', ProductsPage::class )->name('products');
Route::get( '/price-list', Home::class )->name('price-list');
Route::get( '/contact-us', Contact::class )->name('contact-us');

Route::get( '/price-list', PriceListPage::class )->name('price-list');

Route::get( '/register', RegisterPage::class )->name('register');
Route::get( '/signin', SigninPage::class )->name('signin');
Route::get( '/signout', SignoutPage::class )->name('signout');
