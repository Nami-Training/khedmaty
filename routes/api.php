<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\user\CartController;
use App\Http\Controllers\Api\user\HomeController;
use App\Http\Controllers\Api\user\OrderController;
use App\Http\Controllers\Api\user\StoreController;
use App\Http\Controllers\Api\user\ProductController;
use App\Http\Controllers\Api\user\ProfileController;
use App\Http\Controllers\Api\user\FavouritsController;
use App\Http\Controllers\Api\user\DepartmentController;
use App\Http\Controllers\Api\PushNotificationController;
use App\Http\Controllers\Api\user\ShoppingCartController;
use App\Http\Controllers\Api\store\HomeController as StoreHomeController;
use App\Http\Controllers\Api\store\OrderController as StoreOrderController;
use App\Http\Controllers\Api\store\ProductController as StoreProductController;

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

Route::post('/login', [ProfileController::class, 'login']);
Route::post('/register', [ProfileController::class, 'register']);

Route::group(['middleware' => 'auth:sanctum'], function(){

    // ---------------- notification route -------------
    Route::get('/send-notification', [PushNotificationController::class, 'sendPushNotification']);

    // ------------------- user Routes ----------------
    Route::get('/', [HomeController::class, 'index']);

    Route::get('/departments/search', [DepartmentController::class, 'search']);
    Route::get('/departments/filter', [DepartmentController::class, 'filter']);
    Route::apiResource('/departments', DepartmentController::class);

    Route::apiResource('/stores', StoreController::class);
    Route::apiResource('/products', ProductController::class);

    Route::get('/favourits/{id}', [FavouritsController::class, 'show']);
    Route::apiResource('/orders', OrderController::class);
    Route::post('/logout', [ProfileController::class, 'logout']);
    Route::put('/profile/update/{id}', [ProfileController::class, 'UpdateProfile']);
    Route::delete('/profile/delete/{id}', [ProfileController::class, 'deleteAccount']);
    Route::apiResource('/profile', ProfileController::class);

    Route::post('cart/cart_delete', [CartController::class, 'cart_delete']);
    Route::post('cart/update_cart', [CartController::class, 'update_cart']);
    Route::apiResource('/cart', CartController::class);

    Route::apiResource('shopping-cart', ShoppingCartController::class);

    // ------------------- store Routes ----------------
    Route::get('/wallet', [StoreHomeController::class, 'wallet']);
    Route::get('/store_index', [StoreHomeController::class, 'index']);
    Route::apiResource('store-orders', StoreOrderController::class);
    Route::apiResource('store-products', StoreProductController::class);
});