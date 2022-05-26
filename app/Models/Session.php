<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='sessions';

 */

class Session extends Model
{
    use SoftDeletes;

    public $table = 'sessions';


    protected $fillable = [
        'id',
        'owner_user_id',
        'owner_key',
        'target_user_id',
        'target_key',
        'session_type',
        'session_status',
        'note',
        'amount',
        'last_message',
    ];

    protected $hidden = [

    ];

    protected $dates = ['deleted_at'];
}
