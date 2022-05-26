<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='sys_transaction_statuses';

 */

class SysTransactionStatus extends Model
{
    use SoftDeletes;

    public $table = 'sys_transaction_statuses';


    protected $fillable = [
        'id',
        'name',
        'description',
    ];

    protected $hidden = [

    ];
}
