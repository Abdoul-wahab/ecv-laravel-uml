<?php

namespace App\Providers;

use App\Models\Conformite;
use App\Models\Contrat;
use App\Models\Controle;
use App\Models\Leger;
use App\Models\Livraison;
use App\Models\Location;
use App\Models\Permission;
use App\Models\Restitution;
use App\Models\Role;
use App\Models\Team;
use App\Models\User;
use App\Models\Utilitaire;
use App\Models\Vehicule;

use App\Observers\ConformiteObserver;
use App\Observers\ContratObserver;
use App\Observers\ControleObserver;
use App\Observers\LegerObserver;
use App\Observers\LivraisonObserver;
use App\Observers\LocationObserver;
use App\Observers\PermissionObserver;
use App\Observers\RestitutionObserver;
use App\Observers\RoleObserver;
use App\Observers\TeamObserver;
use App\Observers\UserObserver;
use App\Observers\UtilitaireObserver;
use App\Observers\VehiculeObserver;



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

        // Conformite
        Conformite::observe(ConformiteObserver::class);

        // Contrat
        Contrat::observe(ContratObserver::class);

        // Controle
        Controle::observe(ControleObserver::class);

        // Leger
        Leger::observe(LegerObserver::class);

        // Livraison
        Livraison::observe(LivraisonObserver::class);

        // Location
        Location::observe(LocationObserver::class);

        // Permission
        Permission::observe(PermissionObserver::class);

        // Restitution
        Restitution::observe(RestitutionObserver::class);

        // Role
        Role::observe(RoleObserver::class);

        // Team
        Team::observe(TeamObserver::class);

        // User
        User::observe(UserObserver::class);

        // Utilitaire
        Utilitaire::observe(UtilitaireObserver::class);

         // Vehicule
         Vehicule::observe(VehiculeObserver::class);
        
    }
}
