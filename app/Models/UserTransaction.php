<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='user_transactions';

 */

class UserTransaction extends Model
{
    use SoftDeletes;

    public $table = 'user_transactions';


    protected $fillable = [
        'user_id',
        'related_user_id',
        'related_transaction_id',
        'related_action_id',
        'transaction_status',
        'transaction_type',
        'system_action',
        'system_transaction',
        'is_approved',
        'amount',
        'commission_amount',
        'commission',
        'commission_israte',
        'transaction_amount',
        'credit_before_transaction',
        'money_amount',
        'money_currency',
    ];

    protected $hidden = [

    ];

    protected $dates = [
        'deleted_at'
    ];

}
