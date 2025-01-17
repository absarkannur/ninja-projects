<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\ServicePage;
use App\Livewire\ServicesPage;
use App\Livewire\AboutPage;
use App\Livewire\ContactPage;

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

Route::get( '/', HomePage::class )->name('home');
Route::get( 'services', ServicesPage::class )->name('services');
Route::get( 'service/{slug}', ServicePage::class )->name('service');
Route::get( 'about-us', AboutPage::class )->name('about-us');
Route::get( 'contact-us', ContactPage::class )->name('contact-us');

// Route::get('/', function () {
//     return view('welcome');
// });

