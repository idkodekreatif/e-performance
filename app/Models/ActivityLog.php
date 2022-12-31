<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * ActivityLog
 */
class ActivityLog extends Model
{
    use HasFactory;
    use LogsActivity;

    /**
     * table activity_log
     *
     * @var string
     */
    protected $table = "activity_log";

    /**
     * user
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'couser_id');
    }
}
