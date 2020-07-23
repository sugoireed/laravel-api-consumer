<?php

namespace Devos\ApiConsumer\Provider;

use Illuminate\Support\ServiceProvider as BaseProvider;
use Devos\ApiConsumer\Router;

class LaravelServiceProvider extends BaseProvider {

    public function register()
    {
         $this->app->bind('apiconsumer',function($app){
             return new Router($app, $app['request'], $app['router']);
        });
    }

    public function boot()
    {
        $this->app->singleton('apiconsumer', function($app){
            return new Router($app, $app['request'], $app['router']);
        });
    }

}
