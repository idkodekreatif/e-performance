<?php

namespace App\Models\iktisar\kaunit\prodi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;

class iktisarSekKaprodiBulananKompetensi extends Model
{
    use HasFactory, LogsActivity;

    protected static $logName = 'Iktisar Bulanan Ka. Unit Sek Kaprodi Kompetensi';

    protected $table = "iktisar_kaprodi_bulanan_kompetensi";
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
