<?php

namespace App\Observers;

use App\Models\Controle;
use Illuminate\Support\Str;

class ContratObserver
{
    public function creating(Contrat $controle): void
    {
        $controle->uuid = Str::uuid();
    }
}
