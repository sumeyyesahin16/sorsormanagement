<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='rt_chat_sessions';

 */

class RtChatSession extends Model
{
    use SoftDeletes;

    public $table = 'rt_chat_sessions';


    protected $fillable = [
        'id',
    ];

    protected $hidden = [

    ];

}
