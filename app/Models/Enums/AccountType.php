<?php

namespace App\Models\Enums;

class AccountType
{
    use HasEnums;

    const LOUEUR = 'loueur';
    const CLIENT = 'clien';
    const EMPLOYE = 'employe';
    
}
