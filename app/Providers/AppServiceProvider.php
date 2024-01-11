<?php

namespace App\Providers;

use App\Models\Langue;
use App\Models\Menu;
use Illuminate\Support\Facades\Session;
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
        $lang = Session::get('local');
        app()->setLocale($lang);
    }
}
