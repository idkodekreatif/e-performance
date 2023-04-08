<?php

namespace App\Models\iktisar\kaunit\bau;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;

class iktisarBauBulananKompetensi extends Model
{
    use HasFactory, LogsActivity;

    protected static $logName = 'Iktisar Bulanan Ka. Unit BAU Kompetensi';

    protected $table = "iktisar_bau_bulanan_kompetensi";
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
