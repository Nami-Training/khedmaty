<?php

namespace App\Providers;

use App\Models\Setting;
use App\Policies\AdminPolicy;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $setting = Setting::checkSettings();

        View()->share([
            'setting' => $setting,
        ]);
    }
}
