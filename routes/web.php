<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Store\ProductController;
use App\Http\Controllers\Store\OrderController;
use App\Http\Controllers\Store\SellerSupportController;
use App\Http\Controllers\Store\StoreProfileController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('admin_logout', function(){
	// \Auth::logout();

	// return view('welcome');
    return "Oka";
})->name('admin_logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([ 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'CheckUserRole']], function() {
    Route::get('/', [App\Http\Controllers\Admin\AdminNavigationController::class, 'dashboard'])->name('dashboard');	
	//define routes here for admin
});

Route::group([ 'prefix' => 'store', 'as' => 'store.', 'middleware' => ['auth', 'CheckUserRole']], function() {
    Route::get('/', [App\Http\Controllers\Store\StoreNavigationController::class, 'dashboard'])->name('dashboard');	
	//define routes here for store
    Route::resource('products', \App\Http\Controllers\Store\ProductController::class);
    Route::get('product-images', [ProductController::class, 'product_images'])->name('product_images');
    Route::resource('orders', \App\Http\Controllers\Store\OrderController::class);
    Route::resource('reviews', \App\Http\Controllers\Store\ReviewController::class);
    Route::resource('account-statement', \App\Http\Controllers\Store\AccountStatementController::class);
    Route::get('order-overview', [OrderController::class, 'order_overview'])->name('order_overview');
    Route::resource('transactions', \App\Http\Controllers\Store\TransactionController::class);
    Route::get('contact', [SellerSupportController::class, 'contact'])->name('contact');
    Route::get('help', [SellerSupportController::class, 'help'])->name('help');
    Route::resource('profile', \App\Http\Controllers\Store\StoreProfileController::class);
    Route::get('setting', [StoreProfileController::class, 'setting'])->name('setting');
});

Route::group([ 'prefix' => 'user', 'as' => 'user.', 'middleware' => ['auth', 'CheckUserRole']], function() {
    Route::get('/', [App\Http\Controllers\User\UserNavigationController::class, 'dashboard'])->name('dashboard');
	//define routes here for user
});
