<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class CronLog extends Model
{
    protected $collection = 'cron_logs';
    protected $connection = 'mongodb';
    use SoftDeletes;
    protected $dates = ['deleted_at'];


    protected $fillable = [
        'log',
    ];
}
