<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function PointAId()
    {
        return $this->hasOne(PointA::class, 'user_id', 'id');
    }
    public function PointBId()
    {
        return $this->hasOne(PointB::class, 'user_id', 'id');
    }
    public function PointCId()
    {
        return $this->hasOne(PointC::class, 'user_id', 'id');
    }
    public function PointDId()
    {
        return $this->hasOne(PointD::class, 'user_id', 'id');
    }
    public function PointEId()
    {
        return $this->hasOne(PointE::class, 'user_id', 'id');
    }
}
