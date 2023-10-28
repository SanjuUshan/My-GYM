<?php

namespace App\Providers;

// use Illuminate\Auth\Access\Gate;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use App\Models\User;


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
      Gate::define('schedule-class',function(User $user){
        return $user->role === 'instructor';
      });

      Gate::define('book-class',function(User $user){
        return $user->role === 'member';
      });
    }
}
