<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'password', 'role_id', 'phone', 'address'];
    protected $hidden = ['password', 'remember_token'];
    protected function casts(): array { return ['email_verified_at' => 'datetime', 'password' => 'hashed']; }

    public function role(): BelongsTo { return $this->belongsTo(Role::class); }
    public function campaigns(): HasMany { return $this->hasMany(Campaign::class, 'fundraiser_id'); }
    public function donations(): HasMany { return $this->hasMany(Donation::class, 'donor_id'); }
    public function isRole(string $role): bool { return $this->role?->slug === $role; }
}
