<?php

namespace App\Observers;

use App\Models\Restitution;
use Illuminate\Support\Str;

class RestitutionObserver
{
    public function creating(Restitution $restitution): void
    {
        $restitution->uuid = Str::uuid();
    }
}
