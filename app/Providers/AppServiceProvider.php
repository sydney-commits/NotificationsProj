<?php

namespace App\Providers;

use App\Observers\SampleObserver1;
use App\Observers\SampleObserver;

use App\Models\Sample;
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
        Sample::observe(SampleObserver1::class);
        Sample::observe(SampleObserver::class);

    }
}
