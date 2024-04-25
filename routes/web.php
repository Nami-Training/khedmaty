<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/** ------------------------- Admin  Routes ------------------------------- */

Route::prefix('admin')->group(function(){

    Route::get('/signIn', [AdminController::class, 'signInForm'])->name('login_form');
    Route::get('/signUp', [AdminController::class, 'signUpForm'])->name('register_form');
    Route::post('/signIn/owner', [AdminController::class, 'signIn'])->name('admin.login');
    Route::post('/signUp/create', [AdminController::class, 'signUp'])->name('admin.register');
    Route::get('/signOut', [AdminController::class, 'logOut'])->name('admin.logout');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard')->middleware('admin');

    Route::get('/sliders/getAll', [SliderController::class, 'getAll']);
    Route::resource('/sliders', SliderController::class);

});

/** ------------------------- End Admin  Routes ------------------------------- */


require __DIR__.'/auth.php';
