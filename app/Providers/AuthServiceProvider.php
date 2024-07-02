<?php

namespace App\Providers;

use App\Models\Admin;
use App\Policies\CarPolicy;
use App\Policies\BlogPolicy;
use App\Policies\FaqsPolicy;
use App\Policies\AdminPolicy;
use App\Policies\BrandPolicy;
use App\Policies\OrderPolicy;
use App\Policies\StorePolicy;
use App\Policies\ClientPolicy;
use App\Policies\SliderPolicy;
use App\Policies\ProductPolicy;
use App\Policies\SettingPolicy;
use App\Policies\CategoryPolicy;
use App\Policies\DepartmentPolicy;
use App\Policies\TestimonialPolicy;
use Illuminate\Support\Facades\Gate;
use App\Policies\StoreCategoryPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [

    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // user ploicies
        Gate::define('viewUSer', [AdminPolicy::class, 'read']);
        Gate::define('createUser', [AdminPolicy::class, 'create']);
        Gate::define('updateUser', [AdminPolicy::class, 'update']);
        Gate::define('deleteUser', [AdminPolicy::class, 'delete']);

        // banners ploicies
        Gate::define('viewBanner', [SliderPolicy::class, 'read']);
        Gate::define('createBanner', [SliderPolicy::class, 'create']);
        Gate::define('updateBanner', [SliderPolicy::class, 'update']);
        Gate::define('deleteBanner', [SliderPolicy::class, 'delete']);

        // StoreCategory ploicies
        Gate::define('viewStoreCategory', [StoreCategoryPolicy::class, 'read']);
        Gate::define('createStoreCategory', [StoreCategoryPolicy::class, 'create']);
        Gate::define('updateStoreCategory', [StoreCategoryPolicy::class, 'update']);
        Gate::define('deleteStoreCategory', [StoreCategoryPolicy::class, 'delete']);

        // department ploicies
        Gate::define('viewDepartment', [DepartmentPolicy::class, 'read']);
        Gate::define('createDepartment', [DepartmentPolicy::class, 'create']);
        Gate::define('updateDepartment', [DepartmentPolicy::class, 'update']);
        Gate::define('deleteDepartment', [DepartmentPolicy::class, 'delete']);

        // category ploicies
        Gate::define('viewCategory', [CategoryPolicy::class, 'read']);
        Gate::define('createCategory', [CategoryPolicy::class, 'create']);
        Gate::define('updateCategory', [CategoryPolicy::class, 'update']);
        Gate::define('deleteCategory', [CategoryPolicy::class, 'delete']);

        // Brand ploicies
        Gate::define('viewBrand', [BrandPolicy::class, 'read']);
        Gate::define('createBrand', [BrandPolicy::class, 'create']);
        Gate::define('updateBrand', [BrandPolicy::class, 'update']);
        Gate::define('deleteBrand', [BrandPolicy::class, 'delete']);

        // Car ploicies
        Gate::define('viewCar', [CarPolicy::class, 'read']);
        Gate::define('createCar', [CarPolicy::class, 'create']);
        Gate::define('updateCar', [CarPolicy::class, 'update']);
        Gate::define('deleteCar', [CarPolicy::class, 'delete']);

        // Store ploicies
        Gate::define('viewStore', [StorePolicy::class, 'read']);
        Gate::define('createStore', [StorePolicy::class, 'create']);
        Gate::define('updateStore', [StorePolicy::class, 'update']);
        Gate::define('deleteStore', [StorePolicy::class, 'delete']);

        // Client ploicies
        Gate::define('viewClient', [ClientPolicy::class, 'read']);
        Gate::define('createClient', [ClientPolicy::class, 'create']);
        Gate::define('updateClient', [ClientPolicy::class, 'update']);
        Gate::define('deleteClient', [ClientPolicy::class, 'delete']);

        // Product ploicies
        Gate::define('viewProduct', [ProductPolicy::class, 'read']);
        Gate::define('createProduct', [ProductPolicy::class, 'create']);
        Gate::define('updateProduct', [ProductPolicy::class, 'update']);
        Gate::define('deleteProduct', [ProductPolicy::class, 'delete']);

        // Order ploicies
        Gate::define('viewOrder', [OrderPolicy::class, 'read']);
        Gate::define('deleteOrder', [OrderPolicy::class, 'delete']);

        // Faqs ploicies
        Gate::define('viewFaqs', [FaqsPolicy::class, 'read']);
        Gate::define('createFaqs', [FaqsPolicy::class, 'create']);
        Gate::define('updateFaqs', [FaqsPolicy::class, 'update']);
        Gate::define('deleteFaqs', [FaqsPolicy::class, 'delete']);

        // Testimonial ploicies
        Gate::define('viewTestimonial', [TestimonialPolicy::class, 'read']);
        Gate::define('createTestimonial', [TestimonialPolicy::class, 'create']);
        Gate::define('updateTestimonial', [TestimonialPolicy::class, 'update']);
        Gate::define('deleteTestimonial', [TestimonialPolicy::class, 'delete']);

        // Blog ploicies
        Gate::define('viewBlog', [BlogPolicy::class, 'read']);
        Gate::define('createBlog', [BlogPolicy::class, 'create']);
        Gate::define('updateBlog', [BlogPolicy::class, 'update']);
        Gate::define('deleteBlog', [BlogPolicy::class, 'delete']);

        // Setting ploicies
        Gate::define('viewSetting', [SettingPolicy::class, 'read']);
        Gate::define('updateSetting', [SettingPolicy::class, 'update']);
    }
}
