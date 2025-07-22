<?php

use App\Livewire\ContactPage;
use App\Livewire\HomePage;
use App\Livewire\ProfilePage;
use App\Livewire\JourneyPage;
use App\Livewire\PrivacyPoliciesPage;
use App\Livewire\PropertiesPage;
use App\Livewire\PropertyPage;
use App\Livewire\TermsConditionsPage;
use App\Livewire\ValuesPage;
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

Route::get( '/', HomePage::class )->name('home');
Route::get( '/profile', ProfilePage::class )->name('profile');
Route::get( '/journey',  JourneyPage::class )->name('journey');
Route::get( '/values',  ValuesPage::class )->name('values');
Route::get( '/contact',  ContactPage::class )->name('contact');
Route::get( '/privacy-policies',  PrivacyPoliciesPage::class )->name('privacy');
Route::get( '/terms-conditions',  TermsConditionsPage::class )->name('terms');

Route::get( '/properties',  PropertiesPage::class )->name('properties');
Route::get( '/property/{slug}',  PropertyPage::class )->name('property');




