<?php

namespace Covaleski\LaravelBootstrap5\Providers;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Path for Blade views.
     */
    protected string $path;

    /**
     * Create the service provider instance.
     */
    public function __construct($app)
    {
        $this->path = dirname(dirname(__DIR__)) . '/resources/views';
        return parent::__construct($app);
    }

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
        Blade::anonymousComponentPath("{$this->path}/components", 'bs');
        Blade::directive('bootstrap_css', function (string $expression) {
            $attributes = Arr::toHtmlAttributes([
                'crossorigin' => 'anonymous',
                'href' => config('bootstrap.css.url'),
                'integrity' => config('bootstrap.css.hash'),
                'rel' => 'stylesheet',
            ]);
            return "<link {$attributes}/>";
        });
        Blade::directive('bootstrap_js', function (string $expression) {
            $attributes = Arr::toHtmlAttributes([
                'crossorigin' => 'anonymous',
                'src' => config('bootstrap.js.url'),
                'integrity' => config('bootstrap.js.hash'),
                'type' => 'text/javascript',
            ]);
            return "<script {$attributes}></script>";
        });
    }
}
