<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='sys_share_content_types';

 */

class SysShareContentType extends Model
{
    //use SoftDeletes;

    public $table = 'sys_share_content_types';


    protected $fillable = [
        'id',
        'name',
        'description',
    ];

    protected $hidden = [

    ];

}
