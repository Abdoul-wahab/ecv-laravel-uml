<?php

namespace App\Observers;

use App\Models\Conformite;
use Illuminate\Support\Str;

class ConformiteObserver
{
    public function creating(Conformite $conformite): void
    {
        $conformite->uuid = Str::uuid();
    }
}
