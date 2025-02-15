<?php

use App\Livewire\HomePage;
use App\Livewire\AboutPage;
use App\Livewire\FacilitiesPage;
use App\Livewire\ProductsPage;
use App\Livewire\PharmacovigilancePage;
use App\Livewire\FacilityPage;
use App\Livewire\ArticlesPage;
use App\Livewire\ArticlePage;
use App\Livewire\StrategyPage;
use App\Livewire\ContactPage;
use App\Livewire\ComingSoonPage;

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

// Route::get( '/', ComingSoonPage::class )->name('comingsoon');
Route::get( '/', HomePage::class )->name('home');
Route::get( '/about', AboutPage::class )->name('about');
Route::get( '/facilities', FacilitiesPage::class )->name('facilities');
Route::get( '/facility/{slug}', FacilityPage::class )->name('facility');
Route::get( '/products', ProductsPage::class )->name('products');
Route::get( '/strategy', StrategyPage::class )->name('strategy');
Route::get( '/contact',  ContactPage::class )->name('contact');
Route::get( '/pharmacovigilance', PharmacovigilancePage::class )->name('pharmacovigilance');

// Articles
Route::get( '/article/{slug}', ArticlePage::class )->name('article');
Route::get( '/articles', ArticlesPage::class )->name('articles');


