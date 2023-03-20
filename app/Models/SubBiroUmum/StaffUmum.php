<?php

namespace App\Models\SubBiroUmum;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class StaffUmum extends Model
{
    use HasFactory;

    protected static $logName = 'Staff Umum Dan Kepegawaian';

    protected $table = "ikbis_staff_umum_dan_kepegawaian";
    protected $guarded = [];

    protected static $logUnguarded = true;

    /**
     * getDescriptionForEvent
     *
     * @param  mixed $eventName
     * @return string
     */
    public function getDescriptionForEvent(string $eventName): string
    {
        return $this->name . " {$eventName} Oleh: " . Auth::user()->name;
    }

    protected static $logOnlyDirty = true;

    /**
     * UserId
     *
     * @return void
     */
    public function UserId()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
