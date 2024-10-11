<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function redirectTo()
    {
        if (auth()->user()->role === 'admin') {
            return '/admin/dashboard';
        }

        return '/student/dashboard';
    }

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
        Gate::define('admin', function ($user) {
            if ($user->role == 'admin') {
                return true;
            }
        });
    }
}
