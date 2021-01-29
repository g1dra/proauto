<?php

namespace App\Providers;

use App\Car;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $anniversaryYears = Carbon::now()->diffInYears(Carbon::createFromDate('2017', '06', '19'));
        $currentYear = Carbon::now()->year;
        View::share([
            'anniversaryYears' => $anniversaryYears,
            'currentYear' => $currentYear
        ]);
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
