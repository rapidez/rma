<?php

namespace Rapidez\RMA;

use Illuminate\Support\ServiceProvider;

class RMAServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/rapidez/rma.php', 'rapidez.rma');
    }

    public function boot()
    {
        $this
            ->bootRoutes()
            ->bootViews()
            ->bootPublishables();
    }

    public function bootRoutes(): self
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        return $this;
    }

    public function bootViews(): self
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'rapidez-rma');

        return $this;
    }

    public function bootPublishables(): self
    {
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/rapidez-rma'),
        ], 'rapidez-rma-views');

        $this->publishes([
            __DIR__ . '/../config/rapidez/rma.php' => config_path('rapidez/rma.php'),
        ], 'rapidez-rma-config');

        return $this;
    }
}
