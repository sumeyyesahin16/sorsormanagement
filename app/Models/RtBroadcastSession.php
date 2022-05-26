<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='rt_broadcast_sessions';

 */

class RtBroadcastSession extends Model
{
    use SoftDeletes;

    public $table = 'rt_broadcast_sessions';


    protected $fillable = [
        'id',
    ];

    protected $hidden = [

    ];

}
