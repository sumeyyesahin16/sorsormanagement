<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='session_messages';

 */

class SessionMessage extends Model
{
    use SoftDeletes;

    public $table = 'session_messages';

    protected $fillable = [
        'id',
        'key',
        'session_id',
        'session_type',
        'sender_user_id',
        'receiver_user_id',
        'message',
        'message_time',
        'date_info',
        'status',
        'is_daterow',
        'is_contentrow',
        'user_content_id',
        'upload_status',
        'content_thumb',
        'content_price',
        'content_extension',
        'content_size',
        'content_name',
        'content_file_type',
        'content_is_paid',
        'is_downloaded',
        'voice_path',
        'voice_duration',
    ];

    protected $hidden = [

    ];

    protected $dates = ['deleted_at'];
}
