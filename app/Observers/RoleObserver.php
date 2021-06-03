<?php

namespace App\Role;

use App\Models\Role;
use Illuminate\Support\Str;

class RoleObserver
{
    public function creating(Role $role): void
    {
        $role->uuid = Str::uuid();
    }
}
