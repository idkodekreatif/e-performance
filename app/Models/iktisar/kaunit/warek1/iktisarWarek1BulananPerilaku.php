<?php

namespace App\Models\iktisar\kaunit\warek1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;

class iktisarWarek1BulananPerilaku extends Model
{
    use HasFactory, LogsActivity;

    protected static $logName = 'Iktisar Bulanan Warek 1 Perilaku';

    protected $table = "iktisar_warek1_bulanan_perilaku";
    protected $guarded = [];

    protected static $logUnguarded = true;

    /**
     * getDescriptionForEvent
     *
     * @param mixed $eventName
     * @return string
     */
    public function getDescriptionForEvent(string $eventName): string
    {
        return $this->name . " {$eventName} Oleh: " . Auth::user()->name;
    }
    protected static $logOnlyDirty = true;
}
