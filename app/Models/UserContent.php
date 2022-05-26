<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='user_contents';

 */

class UserContent extends Model
{
    use SoftDeletes;

    public $table = 'user_contents';


    protected $fillable = [
        'id',
        'user_id',
        'key',
        'path',
        'thumb_path',
        'mini_thum_path',
        'price',
        'file_extension',
        'file_type',
        'file_size',
        'video_duration',
    ];

    protected $dates = ['deleted_at'];

    protected $hidden = [

    ];

}
