<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='user_shares_comments_likes';

 */

class UserShareCommentLike extends Model
{
    //use SoftDeletes;

    public $table = 'user_shares_comments_likes';


    protected $fillable = [
        'id',
        'comment_id',
        'user_id',
        'is_like',
    ];

    protected $hidden = [

    ];

}
