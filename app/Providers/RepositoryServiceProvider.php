<?php

namespace App\Providers;

use App\Interfaces\DetailInterfaceRepository;
use App\Repositories\DetailRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(DetailInterfaceRepository::class, DetailRepository::class);
    }

    public function boot()
    {
        //
    }
}
