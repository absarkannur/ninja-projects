<?php

use App\Livewire\CartPage;
use App\Livewire\HomePage;
use App\Livewire\Navbar;
use App\Livewire\RegisterPage;
use App\Livewire\SigninPage;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

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

Route::get( '/', HomePage::class )->name( 'home' );
Route::get( '/cart', CartPage::class )->name( 'cart' );
// Products
// ProductDetails

Route::get( 'logout', function( Request $request ) {
    Auth::guard('customers')->logout();
    // session()->flush('users_session');
    $request->session()->forget('users_session');
    return redirect('/');
})->name('logout');