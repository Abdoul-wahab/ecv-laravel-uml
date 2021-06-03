<?php

namespace App\Providers;

// Contrat
use App\Models\Team;
use App\Models\User;

// Controle
use App\Models\Contrat;
use App\Models\Controle;

// Location
use App\Models\Location;
use App\Models\Vehicule;

// User
use App\Models\Utilitaire;
use App\Observers\TeamObserver;

// Utilitaire
use App\Observers\UserObserver;
use App\Observers\ContratObserver;

// Vehicule
use App\Observers\ControleObserver;
use App\Observers\LocationObserver;

use App\Observers\VehiculeObserver;
use App\Observers\UtilitaireObserver;
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
        Team::observe(TeamObserver::class);

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
