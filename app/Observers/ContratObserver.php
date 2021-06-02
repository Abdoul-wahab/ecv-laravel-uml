<?php

namespace App\Observers;

use App\Models\Contrat;
use Illuminate\Support\Str;

class ContratObserver
{
    public function creating(Contrat $contrat): void
    {
        $contrat->uuid = Str::uuid();
    }
}
