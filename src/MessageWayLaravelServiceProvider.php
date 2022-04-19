<?php

namespace MessageWay\MessageWayLaravel;

use Illuminate\Support\ServiceProvider;

class MessageWayLaravelServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/messagewaylaravel.php', 'MessageWayLaravel');

        // Register the service the package provides.
        $this->app->singleton('MessageWayLaravel', function ($app) {
            $apiKey = config("MessageWayLaravel.apiKey", "");
            return new MessageWayLaravel($apiKey);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['MessageWayLaravel'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        $this->publishes([
            __DIR__.'/../config/messagewaylaravel.php' => config_path('messagewaylaravel.php'),
        ], 'MessageWayLaravel.config');
    }
}
