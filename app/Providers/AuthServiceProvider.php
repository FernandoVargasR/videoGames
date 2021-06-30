<?php

namespace App\Providers;

use App\Models\User; //gates
use App\Models\Programa; //gates
use App\Models\Team;
use App\Policies\TeamPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate; //gates


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Team::class => TeamPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //gates

        //el gate before se ejecuta antes de cualquier otro y le esta dando acceso al admonistrador a todo desde antes de que se ejecuten los demas
        Gate::before(function($user, $ability){
            if($user->tipo=='Administrador'){
                return true;
            }
        });

        Gate::define('admin-videogames', function(User $user){
            return $user->tipo == 'Administrador'
                ? Response::allow()
                : Response::deny('Debes ser un administrador.');
        });

        Gate::define('admin-ftpvideogames', function(User $user){
            return $user->tipo == 'Administrador'
                ? Response::allow()
                : Response::deny('Debes ser un administrador.');
        });


    }
}
