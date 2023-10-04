<?php

namespace App\Providers;

use App\Models\Benefit;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class BenefitDataServiceProvider extends ServiceProvider
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
        $Benefit = Benefit::all();
        View::share('Benefit', $Benefit);
    }
}
