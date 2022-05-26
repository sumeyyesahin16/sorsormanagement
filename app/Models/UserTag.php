<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='user_tags';

 */

class UserTag extends Model
{
    //use SoftDeletes;

    public $table = 'user_tags';


    protected $fillable = [
        'id',
        'user_id',
        'tag_type',
        'tag',
    ];

    protected $hidden = [

    ];

}
