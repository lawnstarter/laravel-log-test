<?php

namespace LaravelLogTest;

use Psy\Readline\Hoa\Console;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            Console\Commands\LogTest::class,
            Console\Commands\LogTestCommand::class,
            Console\Commands\LogTestQueue::class,
            
        ]);
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
    }
}
