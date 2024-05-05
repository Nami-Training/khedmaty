<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\StoreCatgoryController;
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

    // -------------------------------- sliders routes ---------------------------------
    Route::get('/sliders/getAll', [SliderController::class, 'getAll'])->name('sliders.data');
    Route::resource('/sliders', SliderController::class);

    // -------------------------------- brands routes ---------------------------------
    Route::get('/brands/getAll', [BrandController::class, 'getAll'])->name('brands.data');
    Route::resource('/brands', BrandController::class);

    // -------------------------------- categories routes ---------------------------------
    Route::get('/categories/getAll', [CategoryController::class, 'getAll'])->name('categories.data');
    Route::resource('/categories', CategoryController::class);

    // -------------------------------- cars routes ---------------------------------
    Route::get('/cars/getAll', [CarController::class, 'getAll'])->name('cars.data');
    Route::resource('/cars', CarController::class);

    // -------------------------------- questions routes ---------------------------------
    Route::get('/faqs/getAll', [QuestionController::class, 'getAll'])->name('faqs.data');
    Route::resource('/faqs', QuestionController::class);

    // -------------------------------- StoreCatgory routes ---------------------------------
    Route::get('/storeCategoies/getAll', [StoreCatgoryController::class, 'getAll'])->name('storeCategoies.data');
    Route::resource('/storeCategoies', StoreCatgoryController::class);

    // -------------------------------- departments routes ---------------------------------
    Route::get('/departments/getAll', [DepartmentController::class, 'getAll'])->name('departments.data');
    Route::resource('/departments', DepartmentController::class);


    // -------------------------------- setting routes ---------------------------------
    Route::resource('setting', SettingController::class);

});

/** ------------------------- End Admin  Routes ------------------------------- */


require __DIR__.'/auth.php';
