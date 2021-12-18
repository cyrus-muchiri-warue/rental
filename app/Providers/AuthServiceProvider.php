<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\Roomate;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
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

        //
        Gate::define('view-post',function(User $user,Post $post){
            return $user->id===$post->user->id;
        });
        Gate::define('view-roomate',function(User $user,Roomate $roomate){
            return $user->id===$roomate->user->id;
        });
        
    }
}
