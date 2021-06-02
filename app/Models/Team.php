<?php

namespace App\Models;

use App\Models\User;
use Laratrust\Models\LaratrustTeam;

class Team extends LaratrustTeam
{

    public $fillable = [
        'uuid',
        'name',
        'display_name',
        'description',
        'type',
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function vehicules(): HasMany
    {
        return $this->hasMany(Vehicule::class);
    }
}
