<?php

namespace Covaleski\LaravelBootstrap5\Providers;

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
            return "<link <?= (new \\Illuminate\\View\\ComponentAttributeBag())->merge(array_replace(config('bootstrap.css'), {$expression})) ?>/>";
        });
        Blade::directive('bootstrap_css_preload', function (string $expression) {
            return "<link <?= (new \\Illuminate\\View\\ComponentAttributeBag())->merge(array_replace(config('bootstrap.css'), ['rel' => 'preload', 'as' => 'style'], {$expression})) ?>/>";
        });
        Blade::directive('bootstrap_js', function (string $expression) {
            return "<script <?= (new \\Illuminate\\View\\ComponentAttributeBag())->merge(array_replace(config('bootstrap.js'), {$expression})) ?>></script>";
        });
        Blade::directive('variant', function ($expression) {
            return <<<PHP
                <?php {$expression} = array_search(
                    true,
                    compact(config('bootstrap.variants.available')),
                    true,
                ) ?: config('bootstrap.variants.default'); ?>
                PHP;
        });
    }
}
