<?php

namespace App\Providers;

use App\Http\Repositories\CustomerRepository;
use App\Http\Repositories\Impl\CustomerRepositoryImpl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(
            CustomerRepository::class,
            CustomerRepositoryImpl::class
        );

        $this->app->singleton(
            CustomerService::class,
            CustomerServiceImpl::class
        );
    }
}
