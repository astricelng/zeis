<?php

namespace App\Providers;

use function array_has;
use function array_key_exists;
use function config;
use function dd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use function in_array;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        //To support laravel 5 database charset on MySQL
        Schema::defaultStringLength(191);
    
        //Set the locale to be use in the request
        $lang = $request->segment(1);
        
        if ($lang != null && in_array($lang, config('translatable.locales')))
        {
            app()->setLocale($lang);
        }

        if ($lang === 'admin')
        {
            app()->setLocale('en');
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
