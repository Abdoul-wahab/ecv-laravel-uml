<?php

namespace App\Models;

use App\Models\Controle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Livraison extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'status',
    ];

    public function controle(): BelongsTo
    {
        return $this->belongsTo(Controle::class, 'controle_id', 'id');
    }
}
