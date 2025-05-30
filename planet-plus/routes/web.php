<?php

use App\Livewire\AboutPage;
use App\Livewire\ContactPage;
use App\Livewire\HomePage;
use App\Livewire\ProductPage;
use App\Livewire\ProductsPage;
use App\Livewire\ServicePage;
use App\Livewire\ServicesPage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomePage::class )->name('home');
Route::get('/about-us', AboutPage::class )->name('about');
Route::get('/services', ServicesPage::class )->name('services');
Route::get('/service/{slug}', ServicePage::class )->name('service');
Route::get('/products', ProductsPage::class )->name('products');
Route::get('/products/{slug}', ProductPage::class )->name('product');
Route::get('/contact-us', ContactPage::class )->name('contact');

