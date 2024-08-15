<?php

namespace Mrhitss\Gstin\Providers;

use Mrhitss\Gstin\Services\Gstin as GstinClient;

class GstinServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected bool $defer = false;

    public function boot(): void
    {
        $configPath = __DIR__ . '/../config/gstin.php';
        $this->publishes([$configPath => config_path('gstin.php')], 'config');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        $this->registerGstin();

        $this->mergeConfig();
    }

    /**
     * Register the application bindings.
     *
     * @return void
     */
    private function registerGstin(): void
    {
        $this->app->singleton('gstin_client', static function () {
            return new GstinClient();
        });
    }

    /**
     * Merges user's and gstin's configs.
     *
     * @return void
     */
    private function mergeConfig(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/config.php',
            'gstin'
        );
    }
}
