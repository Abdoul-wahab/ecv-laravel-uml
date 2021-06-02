<?php

namespace App\Providers;

// Contrat
use App\Models\Contrat;
use App\Observers\ContratObserver;

// Controle
use App\Models\Controle;
use App\Observers\ControleObserver;

// Location
use App\Models\Location;
use App\Observers\LocationObserver;

// User
use App\Models\User;
use App\Observers\UserObserver;

// Utilitaire
use App\Models\Utilitaire;
use App\Observers\UtilitaireObserver;

// Vehicule
use App\Models\Vehicule;
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
        // Contrat
        Contrat::observe(ContratObserver::class);

        // Controle
        Controle::observe(ControleObserver::class);

        // Location
        Location::observe(LocationObserver::class);

        // User
        User::observe(UserObserver::class);

        // Utilitaire
        Utilitaire::observe(UtilitaireObserver::class);

         // Vehicule
         Vehicule::observe(VehiculeObserver::class);
    }
}
