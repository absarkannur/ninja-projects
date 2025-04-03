<?php

use App\Livewire\CheckoutPage;
use App\Livewire\ForgetPasswordPage;
use App\Livewire\HomePage;
use App\Livewire\OrdersPage;
use App\Livewire\RegisterPage;
use App\Livewire\ResetPasswordPage;
use App\Livewire\SigninPage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::prefix('gust')->group(function(){
    Route::get( '/register', RegisterPage::class )->name( 'register' );
    Route::get( '/login', SigninPage::class )->name( 'login' );
    Route::get( '/forgot', ForgetPasswordPage::class )->name( 'password.request' );
    Route::get( '/reset/{token}', ResetPasswordPage::class )->name( 'password.reset' );
});


Route::middleware(['auth:customers'])->prefix('user')->group(function(){
    Route::get( '/orders', OrdersPage::class )->name( 'orders' );
    Route::get( '/checkout', CheckoutPage::class )->name( 'checkout' );

    // AddAddress
    // Track Orders
    // Order View Details
    // CheckOut
    // Order Success
    // Order Cancel
})->middleware('auth:customers');
