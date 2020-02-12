<?php

use Illuminate\Foundation\Testing\TestCase as LaravelTestCase;

class TestCase extends LaravelTestCase {

    /**
     * Boots the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../vendor/laravel/laravel/bootstrap/app.php';
        $app->register('LaravelLogTest\ServiceProvider');
        $app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();
        return $app;        
    }
        
}