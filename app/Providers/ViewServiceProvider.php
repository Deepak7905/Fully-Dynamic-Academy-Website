<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\SocialMedia;


class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Use a view composer to share the $socialMediaLinks variable with all views
        View::composer('*', function ($view) {
            $socialMediaLinks = SocialMedia::all();
            $view->with('socialMediaLinks', $socialMediaLinks);
        });
    }
}
