<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ShowHome;
use App\Livewire\ShowAboutPage;
use App\Livewire\ShowProductPage;
use App\Livewire\ShowInsightPage;
use App\Livewire\ShowServicesPage;


Route::get('/', ShowHome::class )->name('home');
Route::get('/about', ShowAboutPage::class )->name('about');
Route::get('/products', ShowProductPage::class )->name('products');
Route::get('/insights', ShowInsightPage::class )->name('insights');
Route::get('/services', ShowServicesPage::class )->name('services');

