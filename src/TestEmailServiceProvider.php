<?php

namespace FilippoToso\TestEmail;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class TestEmailServiceProvider extends ServiceProvider
{

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {

        parent::boot();

        $this->loadViewsFrom(__DIR__.'/../views', 'test-email');

        $this->publishes([
            __DIR__.'/../views' => resource_path('views/vendor/filippo-toso/test-email'),
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([TestEmailCommand::class]);
        }

    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {

    }

}
