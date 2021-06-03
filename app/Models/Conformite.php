<?php

namespace App\Models;

use App\Models\Controle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Conformite extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
    ];

    public function controle(): BelongsTo
    {
        return $this->belongsTo(Controle::class, 'controle_id', 'id');
    }
}
