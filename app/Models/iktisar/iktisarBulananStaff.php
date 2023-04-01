<?php

namespace App\Models\iktisar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;

class iktisarBulananStaff extends Model
{
    use HasFactory, LogsActivity;

    protected static $logName = 'Iktisar Bulanan Staff';

    protected $table = "ikbis_iktisar_staff_bulanan";
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
}
