<?php

namespace App\Models;

use App\Models\Enums\AccountType;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid',
        'last_name',
        'first_name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     /**
     * Get the current team of the user's context.
     */
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'team_id');
    }

    /**
     * Check if user has already a "personal" team.
     */
    public function hasTeam(): bool
    {
        return $this->rolesTeams()->where('type', AccountType::LOUEUR)->exists();
    }

    public function isAdmin(): bool
    {
        return $this->hasRole('super-admin');
    }

    public function isEmploye(): bool
    {
        return $this->hasRole('employe');
    }

    public function isClient(): bool
    {
        return $this->hasRole('team-admin');
    }
}
