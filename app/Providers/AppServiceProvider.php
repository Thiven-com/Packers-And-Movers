<?php

namespace App\Providers;
use App\Models\Service;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;

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
        View::composer('layouts.website', function ($view) {

            $footerServices = Service::where('status', 'show')
                ->inRandomOrder()
                ->take(4)
                ->get();

            $site = SiteSetting::first();


            $view->with([
                'footerServices' => $footerServices,
                'site' => $site
            ]);

        });
    }
}
