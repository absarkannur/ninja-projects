<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\ServicePage;
use App\Livewire\ServicesPage;

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

// Route::get('/', function () {
//     return view('welcome');
// });

