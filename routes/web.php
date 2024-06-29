<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WishListController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\StoreController;
use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ProdcutController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\User\FavouritsController;
use App\Http\Controllers\Gatwayes\PaypalController;
use App\Http\Controllers\Gatwayes\StripeController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\User\ShoppingCartController;
use App\Http\Controllers\Admin\StoreCatgoryController;
use App\Http\Controllers\User\BlogController as UserBlogController;
use App\Http\Controllers\User\StoreController as UserStoreController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\User\ProductController as UserProductController;
use App\Http\Controllers\User\DepartmentController as UserDepartmentController;

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

Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/Contact-Us', [UserController::class, 'contactUsForm'])->name('contactUsForm');
Route::post('/Contact-Us', [UserController::class, 'contactUs'])->name('contactUs');
Route::get('/About-Us', [UserController::class, 'aboutUs'])->name('aboutUs');
Route::get('/privacy-policy', [UserController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/terms-conditions', [UserController::class, 'termsConditions'])->name('termsConditions');
Route::get('/faqs', [UserController::class, 'faqs'])->name('faqs');
Route::get('/allCategories', [UserController::class, 'allCategories'])->name('allCategories');
Route::get('/getDepartmentItems', [UserController::class, 'getDepartmentItems'])->name('getDepartmentItems');

Route::get('/auth', [UserController::class, 'auth'])->name('auth');
Route::get('/auth_SignUp', [UserController::class, 'authSignUp'])->name('authSignUp');
Route::post('/loginAuth', [UserController::class, 'login'])->name('loginAuth');
Route::post('/registerAuth', [UserController::class, 'register'])->name('registerAuth');

Route::middleware('user')->group(function () {
    Route::get('/Logout', [UserController::class, 'logOut'])->name('user.logout');
    Route::get('/myprofile', [UserController::class, 'myProfile'])->name('myProfile');
    Route::post('/update_profle/{id}', [UserController::class, 'UpdateProfile'])->name('UpdateProfile');
    Route::get('/deleteAccount/{id}', [UserController::class, 'deleteAccount'])->name('deleteAccount');
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::resource('/Orders', OrderController::class);
    Route::resource('/favourits', FavouritsController::class);

    // -------------------------------- wishlist routes ---------------------------------
    Route::post('/wishlist/add_store', [WishListController::class, 'add_store'])->name('wishlist.add_store');
    Route::post('/wishlist/add_product', [WishListController::class, 'add_product'])->name('wishlist.add_product');

    // ---------------------- payment Route ----------------
    // paypal routes
    Route::post('paypal/payment/{data}', [PaypalController::class, 'payment'])->name('paypal.payment');
    Route::get('paypal/success', [PaypalController::class, 'success'])->name('paypal.success');
    Route::get('paypal/cancel', [PaypalController::class, 'cancel'])->name('paypal.cancel');

    // stripe routes
    Route::post('stripe/payment', [StripeController::class, 'payment'])->name('stripe.payment');
    Route::get('stripe/success', [StripeController::class, 'success'])->name('stripe.success');
    Route::get('stripe/cancel', [StripeController::class, 'cancel'])->name('stripe.cancel');

});

Route::resource('Blogs', UserBlogController::class);
Route::get('/shop-department/search', [UserDepartmentController::class, 'search'])->name('shop-department.search');
Route::get('/shop-department/filter', [UserDepartmentController::class, 'filter'])->name('shop-department.filter');
Route::resource('shop-department', UserDepartmentController::class);

Route::get('/Stores/search', [UserStoreController::class, 'search'])->name('Stores.search');
Route::get('/Stores/filter', [UserStoreController::class, 'filter'])->name('Stores.filter');
Route::resource('Stores', UserStoreController::class);

Route::resource('Products', UserProductController::class);

Route::post('cart/cart_delete', [CartController::class, 'cart_delete'])->name('cart.cart_delete');
Route::post('cart/update_cart', [CartController::class, 'update_cart'])->name('cart.update_cart');
Route::resource('cart', CartController::class);

Route::resource('shopping-cart', ShoppingCartController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

/** ------------------------- Admin  Routes ------------------------------- */

Route::prefix('admin')->group(function(){

    Route::get('/signIn', [AdminController::class, 'signInForm'])->name('login_form');
    Route::get('/signUp', [AdminController::class, 'signUpForm'])->name('register_form');
    Route::post('/signIn/owner', [AdminController::class, 'signIn'])->name('admin.login');
    Route::post('/signUp/create', [AdminController::class, 'signUp'])->name('admin.register');

    Route::middleware('admin')->group(function(){
        Route::get('/signOut', [AdminController::class, 'logOut'])->name('admin.logout');
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('/myProfile/{id}', [AdminController::class, 'myProfile'])->name('admin.myProfile');
        Route::post('/myProfile/{id}', [AdminController::class, 'updateProfile'])->name('admin.updateProfile');
        Route::post('/changePassword/{id}', [AdminController::class, 'changePassword'])->name('admin.changePassword');

        // -------------------------------- Admins routes ---------------------------------
        Route::get('/admins/getAll', [AdminsController::class, 'getAll'])->name('admins.data');
        Route::resource('/admins', AdminsController::class);


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

        // -------------------------------- Blogs routes ---------------------------------
        Route::get('/blogs/getAll', [BlogController::class, 'getAll'])->name('blogs.data');
        Route::resource('/blogs', BlogController::class);

        // -------------------------------- Testimonial routes ---------------------------------
        Route::get('/testimonials/getAll', [TestimonialController::class, 'getAll'])->name('testimonial.data');
        Route::resource('/testimonials', TestimonialController::class);

        // -------------------------------- clients routes ---------------------------------
        Route::get('/clients/getAll', [ClientController::class, 'getAll'])->name('clients.data');
        Route::get('/clients/best-client', [ClientController::class, 'bestClients'])->name('clients.bestClients');
        Route::get('/clients/getBestClients', [ClientController::class, 'getBestClients'])->name('clients.getBestClients');
        Route::get('/clients/changeOfferStatus/{id}', [ClientController::class, 'changeOfferStatus'])->name('clients.changeOfferStatus');
        Route::resource('/clients', ClientController::class);


        // -------------------------------- stores routes ---------------------------------
        Route::get('/stores/getAll', [StoreController::class, 'getAll'])->name('stores.data');
        Route::get('/stores/changeOfferStatus/{id}', [StoreController::class, 'changeOfferStatus'])->name('stores.changeOfferStatus');
        Route::get('/stores/more-sales', [StoreController::class, 'moreSales'])->name('stores.moreSales');
        Route::get('/stores/moreSalesGetAll', [StoreController::class, 'moreSalesGetAll'])->name('stores.moreSalesGetAll');
        Route::resource('/stores', StoreController::class);

        // -------------------------------- products routes ---------------------------------
        Route::get('/products/getAll', [ProdcutController::class, 'getAll'])->name('products.data');
        Route::get('/products/more-sold', [ProdcutController::class, 'moreSold'])->name('products.moreSold');
        Route::get('/products/moreSoldGetAll', [ProdcutController::class, 'moreSoldGetAll'])->name('products.moreSoldGetAll');
        Route::resource('/products', ProdcutController::class);


        // -------------------------------- products routes ---------------------------------
        Route::get('/orders/getAll', [AdminOrderController::class, 'getAll'])->name('orders.data');
        Route::get('/orders/getProduct', [AdminOrderController::class, 'getProduct'])->name('orders.getProduct');
        Route::get('/orders/product/{id}', [AdminOrderController::class, 'filter'])->name('orders.filter');
        Route::resource('/orders', AdminOrderController::class);

        // -------------------------------- setting routes ---------------------------------
        Route::resource('setting', SettingController::class);

    });

});

/** ------------------------- End Admin  Routes ------------------------------- */


require __DIR__.'/auth.php';
