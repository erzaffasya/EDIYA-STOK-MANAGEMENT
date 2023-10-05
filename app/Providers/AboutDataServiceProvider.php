<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\About;
use Illuminate\Support\Facades\View;

class AboutDataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $About = About::all();
        View::share('About', $About);
    }
}
