<?php

namespace App\Livraison;

use App\Models\Livraison;
use Illuminate\Support\Str;

class LivraisonObserver
{
    public function creating(Livraison $livraison): void
    {
        $livraison->uuid = Str::uuid();
    }
}
