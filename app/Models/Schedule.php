<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='schedules';

 */

class Schedule extends Model
{
    use SoftDeletes;

    public $table = 'schedules';


    protected $fillable = [
        'id',
        'owner_user_id',
        'target_user_id',
        'status',
        'system_action',
        'action_datetime',
        'action_duration',
    ];

    protected $hidden = [

    ];

    protected $dates = ['deleted_at'];
}
