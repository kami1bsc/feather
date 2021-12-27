<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\AddressBookController;
use App\Http\Controllers\Api\ApplicationUtilitySeedController;
use App\Http\Controllers\Api\MainController;
use App\Http\Controllers\Api\BirdController;
use App\Http\Controllers\Api\ProfileController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Auth Routes
Route::post('signup', [AuthController::class, 'signup']);
Route::post('login', [AuthController::class, 'login']);
Route::post('login_with_facebook', [AuthController::class, 'login_with_facebook']);
Route::post('login_with_gmail', [AuthController::class, 'login_with_gmail']);
Route::post('login_with_apple', [AuthController::class, 'login_with_apple']);
Route::post('forgot_password', [AuthController::class, 'forgot_password']);
Route::post('verify_code', [AuthController::class, 'verify_code']);
Route::post('reset_password', [AuthController::class, 'reset_password']);
Route::post('change_password', [AuthController::class, 'change_password']);
Route::get('logout/{user_id}', [AuthController::class, 'logout']);
Route::get('delete_account/{user_id}', [AuthController::class, 'delete_account']);
Route::post('complete_profile', [AuthController::class, 'complete_profile']);
Route::post('change_online_status', [AuthController::class, 'change_online_status']);

//Address Book Routes
Route::post('add_address', [AddressBookController::class, 'add_address']);
Route::post('edit_address', [AddressBookController::class, 'edit_address']);
Route::get('get_addresses/{user_id}', [AddressBookController::class, 'get_addresses']);
Route::get('delete_address/{address_id}', [AddressBookController::class, 'delete_address']);

//Homescreen Routes
Route::get('home_screen/{user_id}', [MainController::class, 'home_screen']);

//Categories 
Route::get('categories', [MainController::class, 'categories']);
Route::get('birds_by_category/{user_id}/{category_id}', [MainController::class, 'birds_by_category']);

//Breed
Route::get('breeds/{user_id}', [MainController::class, 'breeds']);

//Favourite
Route::post('set_favourite_bird', [MainController::class, 'set_favourite_bird']);

//Bird Routes
Route::get('bird_details/{user_id}/{bird_id}', [BirdController::class, 'bird_details']);

//Application Routes
Route::get('bird_image_seeder', [ApplicationUtilitySeedController::class, 'bird_image_seeder']);

//Profile
Route::get('store_profile/{user_id}/{store_id}', [ProfileController::class, 'store_profile']);

//Follow
Route::get('follow/{follower_id}/{following_id}', [MainController::class, 'follow']);

