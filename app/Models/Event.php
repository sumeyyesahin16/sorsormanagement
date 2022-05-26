<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='events';

 */

class Event extends Model
{
    use SoftDeletes;

    public $table = 'events';


    protected $fillable = [
        'id',
        'user_id',
        'event_category',
        'image_path',
        'name',
        'about',
        'event_date',
        'event_hour',
        'event_min',
        'duration_min',
        'standart_ticket',
        'vip_ticket',
    ];

    protected $hidden = [

    ];

    protected $dates = ['deleted_at'];
}
