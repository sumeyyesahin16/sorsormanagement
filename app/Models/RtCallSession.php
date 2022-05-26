<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='rt_call_sessions';

 */

class RtCallSession extends Model
{
    use SoftDeletes;

    public $table = 'rt_call_sessions';


    protected $fillable = [
        'id',
        'key',
        'calling_status',
        'calling_type',
        'vonage_session_id',
        'duration',
        'from_user_id',
        'from_vonage_token',
        'to_user_id',
        'to_vonage_token',
        'started_at',
        'ended_at',
        'error_info',
    ];

    protected $hidden = [

    ];

}
