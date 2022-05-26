<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class MediaComment extends Model
{
    protected $collection = 'media_comments';
    protected $connection = 'mongodb';
    use SoftDeletes;
    protected $dates = ['deleted_at'];


    protected $fillable = [
        'user_id',
        'media_type',
        'path',
    ];
}
