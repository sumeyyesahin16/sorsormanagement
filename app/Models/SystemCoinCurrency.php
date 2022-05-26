<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='system_coin_currency';

 */

class SystemCoinCurrency extends Model
{
    use SoftDeletes;

    public $table = 'system_coin_currency';


    protected $fillable = [
        'id',
        'currency',
        'coin',
        'amount',
    ];

    protected $dates = ['deleted_at'];
}
