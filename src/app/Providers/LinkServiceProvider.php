<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;
use App\Services\LinkService;
use App\Services\Impl\LinkServiceImpl;

class LinkServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Provide services
     * 
     * @return LinkServiceImpl::class
     */
    public function provides()
    {
      return [LinkService::class];
    }  


    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->bind(LinkService::class, LinkServiceImpl::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
