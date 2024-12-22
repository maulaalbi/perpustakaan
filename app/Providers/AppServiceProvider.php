<?php

namespace App\Providers;

use App\Repositories\Admin\AdminRepository;
use App\Repositories\Admin\Contracts\AdminRepositoryInterface;
use App\Repositories\Book\BookRepository;
use App\Repositories\Book\Contracts\BookRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(AdminRepositoryInterface::class , AdminRepository::class);
        $this->app->bind(BookRepositoryInterface::class , BookRepository::class);


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
