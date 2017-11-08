<?php namespace Bantenprov\LaravelOpd;

use Illuminate\Support\ServiceProvider;
use Bantenprov\LaravelOpd\Console\Commands\LaravelOpdCommand;

/**
 * The LaravelOpdServiceProvider class
 *
 * @package Bantenprov\LaravelOpd
 * @author  bantenprov <developer.banten@gmail.com>
 */
class LaravelOpdServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Bootstrap handles
        $this->routeHandle();
        $this->configHandle();
        $this->langHandle();
        $this->viewHandle();
        $this->assetHandle();
        


        $this->publishes([   
            $this->migrationHandle(),            
            __DIR__.'/config/opd.php' => config_path('opd.php')
        ], 'opd');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('laravel-opd', function ($app) {
            return new LaravelOpd;
        });

        $this->app->singleton('command.laravel-opd', function ($app) {
            return new LaravelOpdCommand;
        });

        $this->commands('command.laravel-opd');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'laravel-opd',
            'command.laravel-opd',
        ];
    }

    /**
     * Loading package routes
     *
     * @return void
     */
    protected function routeHandle()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
    }

    /**
     * Loading and publishing package's config
     *
     * @return void
     */
    protected function configHandle()
    {
        $packageConfigPath = __DIR__.'/config/config.php';
        $appConfigPath     = config_path('laravel-opd.php');

        $this->mergeConfigFrom($packageConfigPath, 'laravel-opd');

        $this->publishes([
            $packageConfigPath => $appConfigPath,
        ], 'config');
    }

    /**
     * Loading and publishing package's translations
     *
     * @return void
     */
    protected function langHandle()
    {
        $packageTranslationsPath = __DIR__.'/resources/lang';

        $this->loadTranslationsFrom($packageTranslationsPath, 'laravel-opd');

        $this->publishes([
            $packageTranslationsPath => resource_path('lang/vendor/laravel-opd'),
        ], 'lang');
    }

    /**
     * Loading and publishing package's views
     *
     * @return void
     */
    protected function viewHandle()
    {
        $packageViewsPath = __DIR__.'/resources/views';

        $this->loadViewsFrom($packageViewsPath, 'laravel-opd');

        $this->publishes([
            $packageViewsPath => resource_path('views/vendor/laravel-opd'),
        ], 'views');
    }

    /**
     * Publishing package's assets (JavaScript, CSS, images...)
     *
     * @return void
     */
    protected function assetHandle()
    {
        $packageAssetsPath = __DIR__.'/resources/assets';

        $this->publishes([
            $packageAssetsPath => public_path('vendor/laravel-opd'),
        ], 'public');
    }

    /**
     * Publishing package's migrations
     *
     * @return void
     */
    protected function migrationHandle()
    {
        $packageMigrationsPath = __DIR__.'/database/migrations';

        $this->loadMigrationsFrom($packageMigrationsPath);

        $this->publishes([
            $packageMigrationsPath => database_path('migrations')
        ], 'migrations');
    }
}
