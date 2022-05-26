<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='user_shares_sent';

 */

class UserShareSent extends Model
{
    //use SoftDeletes;

    public $table = 'user_shares_sent';


    protected $fillable = [
        'id',
        'share_id',
        'user_id',
    ];

    protected $hidden = [

    ];

}
