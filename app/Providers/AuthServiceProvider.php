<?php

namespace App\Providers;

use Illuminate\Auth\Access\Gate as AccessGate;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('create-users', function($users){
            return $users->categoria == 3;
        });

        Gate::define('define-categ', function($users){
            return $users->categoria == 1;
        });
    }
}
