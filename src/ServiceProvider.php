<?php
/**
 * Created by PhpStorm.
 * User: lsshu
 * Date: 2019/7/31
 * Time: 15:34
 */

namespace Lsshu\Ftp;


class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;
    public function register()
    {
        $this->app->singleton(Server::class, function(){
            return new Server(config('ftp.config'));
        });
        $this->app->alias(Server::class, 'ftp');
    }

    public function provides()
    {
        return [Server::class, 'ftp'];
    }
}