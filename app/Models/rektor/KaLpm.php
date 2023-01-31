<?php

namespace App\Models\rektor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;

class KaLpm extends Model
{
    use HasFactory, LogsActivity;

    protected static $logName = 'Ka. Lpm';

    protected $table = "ka_lpm";
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
