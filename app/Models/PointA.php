<?php

namespace App\Models;

use App\Models\Setting\Period;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;

class PointA extends Model
{
    use HasFactory, LogsActivity;


    protected static $logName = 'Point A';

    protected $table = "point_a";
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

    public function period()
    {
        return $this->belongsTo(Period::class, 'period_id');
    }
}
