<?php

namespace App\Observers;

use App\Models\Location;
use Illuminate\Support\Str;

class LocationObserver
{
    public function creating(Location $location): void
    {
        $location->uuid = Str::uuid();
    }
}
