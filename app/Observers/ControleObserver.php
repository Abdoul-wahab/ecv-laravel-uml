<?php

namespace App\Observers;

use App\Models\Controle;
use Illuminate\Support\Str;

class ControleObserver
{
    public function creating(Controle $controle): void
    {
        $controle->uuid = Str::uuid();
    }
}
