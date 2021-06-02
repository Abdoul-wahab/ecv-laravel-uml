<?php

namespace App\Observers;

use App\Models\Vehicule;
use Illuminate\Support\Str;

class VehiculeObserver
{
    public function creating(Vehicule $vehicule): void
    {
        $vehicule->uuid = Str::uuid();
    }
}
