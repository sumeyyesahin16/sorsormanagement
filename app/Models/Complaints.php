<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaints extends Model
{
    public $table = 'complaints';

    protected $fillable = [
        'complaint_type',
        'user_id',
        'object_id',
        'action_type',
        'description'
    ];

    protected $hidden = [

    ];

    protected $dates = ['deleted_at'];
}