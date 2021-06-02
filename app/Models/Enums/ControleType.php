<?php

namespace App\Models\Enums;

class AccountType
{
    use HasEnums;

    const CONFORMITE = 'Conformite';
    const LIVRAISON = 'Livraison';
    const RESTITUTION = 'Restitution';
    
}
