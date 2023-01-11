<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use Lab404\Impersonate\Models\Impersonate;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, LogsActivity, Impersonate;


    protected static $logName = 'user';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'fakultas',
        'prodi',
        'about_me',
        'avatar',
        'status',
        'password',
    ];

    protected static $logFillable = true;
    public function getDescriptionForEvent(string $eventName): string
    {
        if (empty(Auth::user()->name)) {
            return $this->name . " {$eventName} Oleh: " . "master Import User";
        } else {
            return $this->name . " {$eventName} Oleh: " .  Auth::user()->name;
        }
    }
    protected static $logOnlyDirty = true;

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

    /**
     * PointAId
     *
     * @return void
     */
    public function PointAId()
    {
        return $this->hasOne(PointA::class, 'user_id', 'id');
    }

    /**
     * PointBId
     *
     * @return void
     */
    public function PointBId()
    {
        return $this->hasOne(PointB::class, 'user_id', 'id');
    }

    /**
     * PointCId
     *
     * @return void
     */
    public function PointCId()
    {
        return $this->hasOne(PointC::class, 'user_id', 'id');
    }

    /**
     * PointDId
     *
     * @return void
     */
    public function PointDId()
    {
        return $this->hasOne(PointD::class, 'user_id', 'id');
    }

    /**
     * PointEId
     *
     * @return void
     */
    public function PointEId()
    {
        return $this->hasOne(PointE::class, 'user_id', 'id');
    }

    /**
     * Warek2
     *
     * @return void
     */
    public function Warek2Id()
    {
        return $this->hasOne(Warek2::class, 'user_id', 'id');
    }
}
