<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\UserShare;
use App\Models\UserShareLike;
use App\Utility\ResultControl;
use Illuminate\Support\Facades\DB;

class DashboardController
{
    public function index(){

        $userData=User::get();
        $userCount=$userData->count();

        $userVerified=User::where('verify_status',1)->get();
        $userPro=User::where('is_pro',1)->get();
        $userVerifiedCount=count($userVerified);
        $userProCount=count($userPro);

        $que    = <<<QUERY
        SELECT
        SUM(IFNULL(count_likes,0)) AS count_likes,
        SUM(IFNULL(count_shares,0)) AS count_shares,
        SUM(IFNULL(count_comments,0)) AS count_comments
        FROM
        user_shares
        QUERY;

        $que2    = <<<QUERY
        SELECT
        SUM(IFNULL(price,0)) AS price
        FROM user_purchased_contents
        QUERY;

        $que3   = <<<QUERY
        SELECT
        SUM(IFNULL(amount,0)) AS amount
        FROM user_payments
        QUERY;

        $userShare1=UserShare::where('share_content_type',1)->get();
        $userShare2=UserShare::where('share_content_type',2)->get();
        $userShare3=UserShare::where('share_content_type',3)->get();
        $userSharePost=count($userShare1);
        $userSharePhoto=count($userShare2);
        $userShareVideo=count($userShare3);


        $userShares = collect(DB::select(DB::raw($que)));
        $purchasedContent = collect(DB::select(DB::raw($que2)));
        $userPayment = collect(DB::select(DB::raw($que3)));

        return view('app.index',[
            "userCount"=>$userCount,
            "userShares"=>$userShares,
            "purchasedContent"=>$purchasedContent,
            "userPayment"=>$userPayment,
            "userSharePost"=>$userSharePost,
            "userSharePhoto"=>$userSharePhoto,
            "userShareVideo"=>$userShareVideo,
            "userVerifiedCount"=>$userVerifiedCount,
            "userProCount"=>$userProCount
        ]);

    }

}