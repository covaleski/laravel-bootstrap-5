<?php

namespace Covaleski\LaravelBootstrap5\Providers;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades;
use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Package root path.
     */
    protected string $path;

    /**
     * Create the service provider instance.
     *
     * Adds the package vendor directory path for convenience.
     */
    public function __construct(Application $app)
    {
        $this->path = dirname(dirname(__DIR__));
        return parent::__construct($app);
    }

    /**
     * Register services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            "{$this->path}/config/bootstrap.php",
            'bootstrap',
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->publishes(
            [
                "{$this->path}/config/bootstrap.php" => config_path('bootstrap.php'),
                "{$this->path}/resources/views" => resource_path('views'),
            ],
            'laravel-bootstrap-5',
        );
        Facades\Blade::anonymousComponentPath(
            "{$this->path}/resources/views/components",
            'bs',
        );
        Facades\Blade::directive(
            'bootstrap_css',
            fn (string $expression) => "<link <?= (new \\Illuminate\\View\\ComponentAttributeBag())->merge(array_replace(config('bootstrap.css'), {$expression})) ?>/>",
        );
        Facades\Blade::directive(
            'bootstrap_css_preload',
            fn (string $expression) => "<link <?= (new \\Illuminate\\View\\ComponentAttributeBag())->merge(array_replace(config('bootstrap.css'), ['rel' => 'preload', 'as' => 'style'], {$expression})) ?>/>",
        );
        Facades\Blade::directive(
            'bootstrap_icons',
            fn (string $expression) => "<link <?= (new \\Illuminate\\View\\ComponentAttributeBag())->merge(array_replace(config('bootstrap.icons'), {$expression})) ?>/>",
        );
        Facades\Blade::directive(
            'bootstrap_icons_preload',
            fn (string $expression) => "<link <?= (new \\Illuminate\\View\\ComponentAttributeBag())->merge(array_replace(config('bootstrap.icons'), ['rel' => 'preload', 'as' => 'style'], {$expression})) ?>/>",
        );
        Facades\Blade::directive(
            'bootstrap_js',
            fn (string $expression) => "<script <?= (new \\Illuminate\\View\\ComponentAttributeBag())->merge(array_replace(config('bootstrap.js'), {$expression})) ?>></script>",
        );
        Facades\Blade::directive(
            'variant',
            fn (string $expression) => <<<PHP
                <?php {$expression} = array_search(
                    true,
                    compact(config('bootstrap.variants.available')),
                    true,
                ) ?: config('bootstrap.variants.default'); ?>
                PHP,
        );
    }
}
