<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Member;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UpdateAccount;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Halaman Home
Route::get('/', function () {

    return view('home', [
        'title' => 'Home'
    ]);
});

// Halaman About
Route::get('/about', function () {

    return view('about', [
        'title' => 'About'
    ]);
});

// Halaman Products
Route::get('/products', [ProductController::class, 'allProducts']);

// Halaman Detail Products
Route::get('products/{product:id}', [ProductController::class, 'detailProduct']);

// Halaman Sign in
Route::get('/signin', [LoginController::class, 'index'])->name('login')->middleware('guest');

// Sign in Member
Route::post('/signin', [LoginController::class, 'authenticate']);

// Logout
Route::post('/logout', [LoginController::class, 'logout']);


// Halaman Sign up
Route::get('/signup', [RegisterController::class, 'index'])->middleware('guest');

// Sign up Member
Route::post('/signup', [RegisterController::class, 'store']);

// Halaman Admin Category
Route::get('/add-category', [AdminCategoryController::class, 'index'])->middleware('admin');

// Post Admin Category
Route::post('/add-category', [AdminCategoryController::class, 'add'])->middleware('auth');


// Halaman Admin CRUD Product
Route::resource('/dashboard/product', AdminProductController::class)->middleware('admin');

// Halaman Profile User
Route::get('/profile/{user:id}', [UpdateAccount::class, 'profile']);

// Halaman Update Profile User
Route::get('/update-profile/{user:id}', [UpdateAccount::class, 'updatePage']);

// Update Profile User
Route::put('/update/{user:id}', [UpdateAccount::class, 'update']);


// Halaman Member Cart
Route::get('/cart', [Member::class, 'index'])->middleware('member');

// Member Add to Cart
Route::post('/cart', [Member::class, 'add'])->middleware('member');

// Member Update Cart
Route::put('/cart/{cart:id}', [Member::class, 'update'])->middleware('member');

// Halaman Member Checkout
Route::get('/cart/checkout', [Member::class, 'checkoutPage'])->middleware('member');

// Member Checkout
Route::post('/cart/checkout', [Member::class, 'checkout'])->middleware('member');

// Halaman Member My Transaction
Route::get('/my-transaction', [Member::class, 'transactionPage'])->middleware('member');