<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='user_followers';

 */

class UserFollower extends Model
{
    //use SoftDeletes;

    public $table = 'user_followers';


    protected $fillable = [
        'id',
        'user_id',
        'follower_user_id',
    ];

    protected $hidden = [

    ];

}
