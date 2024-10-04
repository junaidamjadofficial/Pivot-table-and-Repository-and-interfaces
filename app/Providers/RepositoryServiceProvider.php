<?php

namespace App\Providers;

use App\Repository\RoleRepository;
use App\Repository\UserRepository;
use Illuminate\Support\ServiceProvider;
use App\Repository\Interfaces\RoleInterface;
use App\Repository\Interfaces\UserInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            UserInterface::class,
            UserRepository::class
        );
         $this->app->bind(
            RoleInterface::class,
            RoleRepository::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
