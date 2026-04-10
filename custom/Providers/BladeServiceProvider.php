<?php

namespace Covaleski\LaravelBootstrap5\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
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
        Blade::directive('bootstrap_css', function (string $expression) {
            return view('include.css', config('bootstrap.css'));
        });
        Blade::directive('bootstrap_js', function (string $expression) {
            return view('include.js', config('bootstrap.js'));
        });
    }
}
