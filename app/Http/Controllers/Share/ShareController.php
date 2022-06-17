<?php

namespace App\Http\Controllers\Share;


use App\Models\User;
use App\Models\UserShare;
use App\Models\UserShareLike;
use App\Utility\ResultControl;
use Illuminate\Support\Facades\DB;


class ShareController
{
    public function photos(){
        return view('share.photos');
    }

    public function feed(){
        return view('share.feed');
    }

    public function videos(){
        return view('share.videos');
    }

    public function posts(){
        return view('share.posts');
    }

    public function posts_count(){

        $userShare1=UserShare::where('share_content_type',1)->get();
        $typeCount1=$userShare1->count();

        return view('share.posts',[
            "userShare1"=>$userShare1,
            "typeCount1"=>$typeCount1
        ]);

    }

    public function photos_count(){

        $userShare2=UserShare::where('share_content_type',2)->get();
        $typeCount2=$userShare2->count();

        return view('share.photos',[

            "userShare2"=>$userShare2,
            "typeCount2"=>$typeCount2

        ]);

    }

    public function videos_count(){

        $userShare3=UserShare::where('share_content_type',3)->get();
        $typeCount3=$userShare3->count();

        return view('share.posts',[
            "userShare3"=>$userShare3,
            "typeCount3"=>$typeCount3
        ]);

    }

}