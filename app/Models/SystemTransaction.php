<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='system_transactions';

 */

class SystemTransaction extends Model
{
    use SoftDeletes;

    public $table = 'system_transactions';


    protected $fillable = [
        'id',
        'related_id',
        'refund_id',
        'system_action',
        'transaction_type',
        'transaction_status',
        'code',
        'key',
        'name',
        'description',
        'system_commission',
        'system_commission_israte',
        'is_user_action_available',
    ];

    protected $dates = ['deleted_at'];
}
