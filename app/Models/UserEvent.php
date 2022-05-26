<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='user_events';

 */

class UserEvent extends Model
{
    use SoftDeletes;

    public $table = 'user_events';


    protected $fillable = [
        'id',
        'user_id',
        'name',
        'image',
        'image_path',
        'planned_date',
        'planned_time',
        'price',
        'premium_price',
    ];

    protected $hidden = [

    ];

    protected $dates = ['deleted_at'];

}
