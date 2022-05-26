<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='user_notifications';

 */

class UserNotification extends Model
{
    //use SoftDeletes;

    public $table = 'user_notifications';


    protected $fillable = [
        'id',
        'call_session_id',
        'chat_session_id',
        'sender_user_id',
        'receiver_user_id',
        'action_type',
        'title',
        'message',
    ];

    protected $hidden = [

    ];

}
