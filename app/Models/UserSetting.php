<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**** MODEL ALANLARINI GETIREN SORGU *****

SELECT concat('''',`COLUMN_NAME`,'''',',')
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='SorSor'
AND `TABLE_NAME`='user_settings';

 */

class UserSetting extends Model
{
    //use SoftDeletes;

    public $table = 'user_settings';


    protected $fillable = [
        'id',
        'user_id',
        'is_messages',
        'message_price',
        'is_video_call',
        'is_video_call_schedule',
        'video_call_price',
        'video_call_min_time',
        'is_voice_call',
        'is_voice_call_schedule',
        'voice_call_price',
        'voice_call_min_time',
        'is_fan_poster',
        'fan_price',
        'is_notify_like',
        'is_notify_comment',
        'is_notify_follow',
        'is_notify_fan',
        'is_notify_mention',
        'is_prv_discover',
        'is_prv_online',
        'is_prv_away',
        'is_discover_personalize',
        'is_full_price',
        'schedule_ratio',
        'min_price',
        'max_price',
        'day1_is_available',
        'day1_start_hour',
        'day1_start_min',
        'day1_end_hour',
        'day1_end_min',
        'day2_is_available',
        'day2_start_hour',
        'day2_start_min',
        'day2_end_hour',
        'day2_end_min',
        'day3_is_available',
        'day3_start_hour',
        'day3_start_min',
        'day3_end_hour',
        'day3_end_min',
        'day4_is_available',
        'day4_start_hour',
        'day4_start_min',
        'day4_end_hour',
        'day4_end_min',
        'day5_is_available',
        'day5_start_hour',
        'day5_start_min',
        'day5_end_hour',
        'day5_end_min',
        'day6_is_available',
        'day6_start_hour',
        'day6_start_min',
        'day6_end_hour',
        'day6_end_min',
        'day7_is_available',
        'day7_start_hour',
        'day7_start_min',
        'day7_end_hour',
        'day7_end_min',
    ];

    protected $hidden = [

    ];

}
