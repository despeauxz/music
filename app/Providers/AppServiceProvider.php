<?php

namespace App\Providers;

use App\Models\User;
use App\Events\UserRegistered;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        User::created(function ($user) {
        	$token = $user->activationToken()->create([
				'token' => str_random(60),
			]);

			event(new UserRegistered($user));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
