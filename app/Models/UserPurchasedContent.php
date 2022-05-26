<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='user_purchased_contents';

 */

class UserPurchasedContent extends Model
{
    use SoftDeletes;

    public $table = 'user_purchased_contents';


    protected $fillable = [
        'id',
        'user_id',
        'user_content_id',
        'price',
    ];

    protected $dates = ['deleted_at'];

    protected $hidden = [

    ];

}
