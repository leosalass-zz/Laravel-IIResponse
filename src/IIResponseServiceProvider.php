<?php

namespace Immersioninteractive\ResponseController;

use Illuminate\Support\ServiceProvider;

class IIResponseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(IIResponse::class, function () {
            return new IIResponse();
        });
        $this->app->alias(IIResponse::class, 'IIResponse');
    }
}
