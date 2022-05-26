<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='user_fans';

 */

class UserFan extends Model
{
    //use SoftDeletes;

    public $table = 'user_fans';


    protected $fillable = [
        'id',
        'user_id',
        'fan_user_id',
        'fan_subscribe_id',
        'fan_price',
    ];

    protected $hidden = [

    ];

}
