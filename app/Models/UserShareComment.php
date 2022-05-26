<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='user_shares_comments';

 */

class UserShareComment extends Model
{
    //use SoftDeletes;

    public $table = 'user_shares_comments';


    protected $fillable = [
        'id',
        'share_id',
        'user_id',
        'reply_comment_id',
        'comment',
        'count_likes',
        'count_dislikes',
    ];

    protected $hidden = [

    ];

}
