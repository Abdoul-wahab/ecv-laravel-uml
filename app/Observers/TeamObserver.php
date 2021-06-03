<?php

namespace App\Observers;

use App\Models\Team;
use Illuminate\Support\Str;

class TeamObserver
{
    public function creating(Team $team): void
    {
        $team->uuid = Str::uuid();
    }
}
