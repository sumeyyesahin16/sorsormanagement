<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='user_verify_requests';

 */

class UserVerifyRequest extends Model
{
    use SoftDeletes;

    public $table = 'user_verify_requests';


    protected $fillable = [
        'id',
        'user_id',
        'photo_path',
        'verify_status',
        'verify_note',
        'verify_date',
    ];

    protected $hidden = [

    ];

}
