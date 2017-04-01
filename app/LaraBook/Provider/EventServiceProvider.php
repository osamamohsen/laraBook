<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 9/21/15
 * Time: 8:08 AM
 */

namespace LaraBook\Provider;


use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider{

    /**
     * Register the service provider.
     *
     * @return new Registration
     */
    public function register()
    {
        $this->app['events']->listen('larabook.*','Larabook\Handlers\EmailNotifier');
    }
}