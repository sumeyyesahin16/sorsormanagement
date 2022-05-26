<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='user_custom_statuses';

 */

class UserCustomStatus extends Model
{
    use SoftDeletes;

    public $table = 'user_custom_statuses';

    protected $fillable = [
        'id',
        'user_id',
        'user_status',
        'name',
    ];

    protected $dates = ['deleted_at'];

    protected $hidden = [

    ];

}
