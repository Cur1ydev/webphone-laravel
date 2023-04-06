<?php

namespace App\Providers;

use App\Repositories\Admin\ChangeStatus;
use App\Repositories\Admin\Dashboard;
use App\Repositories\Admin\ProductAdmin;
use App\Repositories\Interface\ChangeStatusInterface;
use App\Repositories\Interface\DashboardInterface;
use App\Repositories\Interface\ProductInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ChangeStatusInterface::class,ChangeStatus::class);
        $this->app->bind(DashboardInterface::class,Dashboard::class);
        $this->app->bind(ProductInterface::class,ProductAdmin::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
