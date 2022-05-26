<?php

namespace App\Models;

use App\Modules\Share\Controls\Shares;
use App\Utility\ResultControl;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    /**** MODEL ALANLARINI GETIREN SORGU *****

    SELECT concat('''',`COLUMN_NAME`,'''',',')
    FROM `INFORMATION_SCHEMA`.`COLUMNS`
    WHERE `TABLE_SCHEMA`='SorSor'
    AND `TABLE_NAME`='users';

     */

    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'key',
        'username',
        'name',
        'email',
        'phone',
        'bio',
        'password',
        'photo',
        'photo_path',
        'push_userid',
        'category_id',
        'country_id',
        'city',
        'currency',
        'status',
        'gender',
        'verify_status',
        'verify_note',
        'verify_date',
        'is_two_factor',
        'is_save_session',
        'is_trusted',
        'is_pro',
        'pro_date',
        'is_email_verified',
        'is_phone_verified',
        'remember_token',
        'phone_verified_at',
        'email_verified_at',
        'access_token',
        'count_following',
        'count_followers',
        'count_likes',
        'count_fans',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'phone_verified_at' => 'datetime',
        'email_verified_at' => 'datetime',
    ];

    public function UserName(){
        return $this->username;
    }

    public function Profile(){

        $id = $this->id;

        $profile = collect(User::leftJoin('system_countries AS sc', 'sc.id', '=', 'users.country_id')
            ->leftJoin('system_categories AS ct', 'ct.id', '=', 'users.category_id')
            ->leftJoin('user_settings AS us','us.user_id', '=', 'users.id')
            ->selectRaw("users.*, us.*, users.id AS id, sc.name AS country, ct.name AS category")
            ->where('users.id', $id)
            ->first());

        if(!$profile)
            return ResultControl::Error('Yetkisiz istek!');

        $shares = Shares::SharesList($profile['username']);
        if($shares){
            $profile['medias']          = $shares['medias'];
            $profile['posts']           = $shares['posts'];
            $profile['fan_medias']      = $shares['fan_medias'];
            $profile['fan_posts']       = $shares['fan_posts'];
        }

        $profile['tags']                = UserTag::where('user_id', $id)->where('tag_type', 1)->get();
        $profile['pro_tags']            = UserTag::where('user_id', $id)->where('tag_type', 2)->get();
        $profile['custom_statuses']     = UserCustomStatus::where('user_id', $id)->get();
        $profile['follow_list']         = UserFollower::where('follower_user_id', $id)->select('user_id')->get();
        $profile['fan_list']            = UserFan::where('fan_user_id', $id)->whereNull('ended_at')->select('user_id')->get();

        $profile['share_likes']         = UserShareLike::where('user_id', $id)->selectRaw("share_id AS id")->get();
        $profile['share_comments']      = UserShareComment::where('user_id', $id)->selectRaw("share_id AS id")->get();
        $profile['share_sent']          = UserShareSent::where('user_id', $id)->selectRaw('share_id AS id')->get();
        $profile['comment_likes']       = UserShareCommentLike::where('user_id', $id)->selectRaw("comment_id AS id, IFNULL(is_like,0) AS is_like")->get();


        return $profile;
    }
}
