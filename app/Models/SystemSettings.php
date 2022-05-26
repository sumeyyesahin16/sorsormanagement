<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='system_settings';

 */

class SystemSettings extends Model
{
    use SoftDeletes;

    public $table = 'system_settings';


    protected $fillable = [
        'id',
        'system_commission',
        'system_commission_israte',
        'vonage_key',
        'redis_server',
        'redis_port',
        'redis_password',
    ];

    protected $hidden = [

    ];

    protected $dates = [
        'deleted_at'
    ];

}
