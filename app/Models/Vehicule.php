<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'marque',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, 'vehicule_service');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('vehicules_images')
            ->useDisk('vehicules');
    }
}
