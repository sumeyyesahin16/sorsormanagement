<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='user_bank_accounts';

 */

class UserBankAccount extends Model
{
    use SoftDeletes;

    public $table = 'user_bank_accounts';


    protected $fillable = [
        'id',
        'user_id',
        'name_surname',
        'iban',
        'swift',
        'currency',
    ];

    protected $dates = ['deleted_at'];

}
