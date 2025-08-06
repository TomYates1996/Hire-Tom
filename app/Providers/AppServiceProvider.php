<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

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
        Inertia::share([
            'cms' => [
                'site_name' => config('cms.site_name'),
                'city' => config('cms.city'),
                'blog' => config('cms.blog'),
                'events' => config('cms.events'),
                'listings' => config('cms.listings'),
                'products' => config('cms.products'),
                'categories' => config('cms.categories'),
                'coupons' => config('cms.coupons'),
            ],
        ]);
    }
}
