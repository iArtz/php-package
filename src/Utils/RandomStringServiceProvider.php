<?php

namespace Utils;

use Illuminate\Support\ServiceProvider;

class RandomStringServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('randomString', RandomString::class);
    }
}
