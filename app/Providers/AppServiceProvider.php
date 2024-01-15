<?php

namespace App\Providers;

use App\Models\Acercade;
use App\Models\Plantel;
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
        /* $planteles = Plantel::all();
        $acercade = Acercade::all();

        $data = array(
            "planteles" => $planteles,
            "acercade" => $acercade
        );

        View::share('data', $data); */
    }
}
