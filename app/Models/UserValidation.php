<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='user_validations';

 */

class UserValidation extends Model
{
    use SoftDeletes;

    public $table = 'user_validations';


    protected $fillable = [
        'id',
        'user_id',
        'phone',
        'email',
        'verify_token',
        'verify_type',
    ];

    protected $hidden = [

    ];

}
