<?php

namespace Covaleski\LaravelBootstrap5\Providers;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
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
        Arr::macro('toHtmlAttributes', function ($values) {
            return collect($values)
                ->whereNotNull()
                ->map(fn ($value, $key) => sprintf('%s="%s"', $key, htmlspecialchars(strval($value))))
                ->values()
                ->join(' ');
        });
        Blade::directive('bootstrap_css', function (string $expression) {
            return view('include.css', config('bootstrap.css'));
        });
        Blade::directive('bootstrap_js', function (string $expression) {
            return view('include.js', config('bootstrap.js'));
        });
    }
}
