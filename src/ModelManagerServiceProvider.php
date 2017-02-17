<?php

namespace CodingPhase\ModelManager;

use Illuminate\Support\ServiceProvider;

class ModelManagerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->handleConfig();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Handle configuration
     */
    private function handleConfig()
    {

    }
}
