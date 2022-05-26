<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='user_credit_cards';

 */

class UserCreditCard extends Model
{
    use SoftDeletes;

    public $table = 'user_credit_cards';


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
