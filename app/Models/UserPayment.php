<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='user_payments';

 */

class UserPayment extends Model
{
    use SoftDeletes;

    public $table = 'user_payments';

    protected $fillable = [
        'id',
        'user_id',
        'code',
        'verify_code',
        'currency',
        'amount',
        'coin',
    ];

    protected $hidden = [

    ];

    protected $dates = ['deleted_at'];
}
