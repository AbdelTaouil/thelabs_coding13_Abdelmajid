<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('webmaster', function(){
            return Auth::user()->roles->role =="Webmaster";
        });
        Gate::define('AdminWebmaster', function(User $user, $article){
            return Auth::user()->roles->role =="Webmaster" || Auth::user()->roles->role=="Admin" || $article->user_id == Auth::user()->id;
        });

        
    }
}
