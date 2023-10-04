<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\VideoPromo;
use Illuminate\Support\Facades\View;

class VideopromoDataServiceProvider extends ServiceProvider
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
        $VideoPromo = VideoPromo::all();
        View::share('VideoPromo', $VideoPromo);
    }
}
