<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\TestimonialModel;
use Illuminate\Support\Facades\View;


class TestimonialDataServiceProvider extends ServiceProvider
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
        $Testimonial =  TestimonialModel::all();
        view::share('Testimonial', $Testimonial);
    }
}
