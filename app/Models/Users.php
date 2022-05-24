<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table="users";
    protected $fillable=[
        "id",
        "key",
        "username",
        "name",
        "email",
        "phone",
        "bio",
        "password",
        "photo",
        "photo_path",
        "push_userid",
        "category_id",
        "country_id",
        "city",
        "currency",
        "status",
        "gender",
        "verify_status",
        "verify_note",
        "verify_date",
        "is_two_factor",
        "is_save_session",
        "is_trusted",
        "is_pro",
        "pro_date",
        "is_email_verified",
        "is_phone_verified",
        "remember_token",
        "phone_verified_at",
        "email_verified_at",
        "access_token",
        "count_following",
        "count_followers",
        "count_likes",
        "count_fans",
        "created_at",
        "updated_at",
        "deleted_at"
    ];
}
