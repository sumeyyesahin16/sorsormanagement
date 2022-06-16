<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='user_shares';

 */

class UserShare extends Model
{
    //use SoftDeletes;

    public $table = 'user_shares';

    protected $fillable = [
        'id',
        'user_id',
        'share_type',
        'share_content_type',
        'key',
        'post_text',
        'image_path',
        'video_path',
        'video_base_path',
        'video_stream_seri',
        'thumb_path',
        'mini_thumb_path',
        'count_shares',
        'count_likes',
        'count_comments',
    ];

    protected $hidden = [

    ];

}
