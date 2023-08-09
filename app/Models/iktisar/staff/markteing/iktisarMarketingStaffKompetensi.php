<?php

namespace App\Models\iktisar\staff\markteing;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;

class iktisarMarketingStaffKompetensi extends Model
{
    use HasFactory, LogsActivity;

    protected static $logName = 'Iktisar Bulanan Staff Marketing Kompetensi';

    protected $table = "iktisar_staff_marketing_kompetensi";
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
