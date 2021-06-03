<?php

namespace App\Leger;

use App\Models\Leger;
use Illuminate\Support\Str;

class LegerObserver
{
    public function creating(Leger $leger): void
    {
        $leger->uuid = Str::uuid();
    }
}
