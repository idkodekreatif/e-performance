<?php

namespace App\Models;

use App\Models\Setting\Jabatan;
use App\Models\Setting\Jabatan\DosenJabatanFungsional;
use App\Models\Setting\Jabatan\DosenJabatanStruktural;
use App\Models\Setting\Jabatan\DosenUnitKerja;
use App\Models\Setting\Jabatan\JabatanFungsional;
use App\Models\Setting\Jabatan\JabatanStruktural;
use App\Models\Setting\Jabatan\UnitKerja;
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
            return $this->name . " {$eventName} Oleh: " . "master Import User Seeder";
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
     * Warek2
     *
     * @return void
     */
    public function Warek2Id()
    {
        return $this->hasOne(Warek2::class, 'user_id', 'id');
    }

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_id', 'id');
    }


    public function jabfung()
    {
        return $this->belongsToMany(
            JabatanFungsional::class,
            'user_jabatan_fungsional',
            'user_id',
            'jabatan_fungsional_id'
        );
    }

    public function jabstruk()
    {
        return $this->belongsToMany(
            JabatanStruktural::class,
            'user_jabatan_struktural',
            'user_id',
            'jabatan_struktural_id'
        );
    }

    public function unitKerja()
    {
        return $this->belongsToMany(
            UnitKerja::class,
            'user_unit_kerja',
            'user_id',
            'unit_kerja_id'
        );
    }
}
