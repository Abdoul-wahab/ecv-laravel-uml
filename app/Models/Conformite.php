<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conformite extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'date',
    ];
}
