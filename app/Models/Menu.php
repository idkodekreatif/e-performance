<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;

class Menu extends Model
{
    use HasFactory, LogsActivity;

    protected static $logName = 'Management menu update disable or enable';

    protected $table = "control_menu";
    protected $guarded = [];

    protected static $logUnguarded = true;
    public function getDescriptionForEvent(string $eventName): string
    {
        return $this->name . " {$eventName} Oleh: " . Auth::user()->name;
    }
    protected static $logOnlyDirty = true;
}
