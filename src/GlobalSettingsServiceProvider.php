<?php

namespace Junaidnasir\GlobalSettings;

use Illuminate\Support\ServiceProvider;

class GlobalSettingsServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/Migrations/' => base_path('/database/migrations')
        ], 'migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('globalSettings', function ($app) {
            return new \Junaidnasir\GlobalSettings\GlobalSettings();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['globalSettings'];
    }
}
