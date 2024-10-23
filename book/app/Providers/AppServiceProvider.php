<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Vite;
// use Illuminate\Pagination\Paginator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Paginator::useBootstrapFive();
        Gate::define('admin', function ($user) {
            if ($user->role === "admin")
                return 1;
        });
        Vite::macro('image', fn(string $asset) => $this->asset("resources/images/{$asset}"));
    }
}
