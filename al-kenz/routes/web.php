<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ShowHome;
use App\Livewire\ShowAboutPage;
use App\Livewire\ShowProductPage;
use App\Livewire\ShowInsightPage;
use App\Livewire\ShowServicesPage;
use App\Livewire\ShowService;
use App\Livewire\ShowProduct;


Route::get('/', ShowHome::class )->name('home');
Route::get('/about', ShowAboutPage::class )->name('about');
Route::get('/products', ShowProductPage::class )->name('products');
Route::get('/product/{id}', ShowProduct::class )->name('product');

Route::get('/insights', ShowInsightPage::class )->name('insights');
Route::get('/services', ShowServicesPage::class )->name('services');
Route::get('/service/{id}', ShowService::class )->name('service');

