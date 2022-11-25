<?php

namespace App\Providers;

use App\Repositories\Eloquents\UserEloquentRepository;
use App\Repositories\Interface\UserInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(UserInterface::class, UserEloquentRepository::class);
    }
}
