<?php

use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\DepartmentController;
use App\Http\Controllers\Api\FavouritsController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\ShoppingCartController;
use App\Http\Controllers\Api\StoreController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::get('/', [HomeController::class, 'index']);


Route::get('/departments/search', [DepartmentController::class, 'search']);
Route::get('/departments/filter', [DepartmentController::class, 'filter']);
Route::apiResource('/departments', DepartmentController::class);

Route::apiResource('/stores', StoreController::class);
Route::apiResource('/products', ProductController::class);

Route::post('/login', [ProfileController::class, 'login']);
Route::post('/register', [ProfileController::class, 'register']);

Route::group(['middleware' => 'auth:sanctum'], function(){

    Route::get('/favourits/{id}', [FavouritsController::class, 'show']);
    Route::apiResource('/orders', OrderController::class);
    Route::post('/logout', [ProfileController::class, 'logout']);
    Route::put('/profile/update/{id}', [ProfileController::class, 'UpdateProfile']);
    Route::delete('/profile/delete/{id}', [ProfileController::class, 'deleteAccount']);
    Route::apiResource('/profile', ProfileController::class);

    Route::post('cart/cart_delete', [CartController::class, 'cart_delete']);
    Route::post('cart/update_cart', [CartController::class, 'update_cart']);
    Route::apiResource('/cart', CartController::class);

    Route::resource('shopping-cart', ShoppingCartController::class);
});