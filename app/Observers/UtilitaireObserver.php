<?php

namespace App\Observers;

use App\Models\Utilitaire;
use Illuminate\Support\Str;

class UtilitaireObserver
{
    public function creating(Utilitaire $utilitaire): void
    {
        $utilitaire->uuid = Str::uuid();
    }
}
