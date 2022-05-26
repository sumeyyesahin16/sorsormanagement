<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='system_countries';

 */

class SystemCountry extends Model
{
    use SoftDeletes;

    public $table = 'system_countries';


    protected $fillable = [
        'id',
        'name',
        'code',
        'phone_code',
        'display_index',
    ];

    protected $hidden = [

    ];

    protected $dates = [
        'deleted_at'
    ];

}
