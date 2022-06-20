<?php

namespace App\Http\Controllers\Share;


use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserShare;
use App\Models\UserShareLike;
use App\Models\UserVerifyRequest;
use App\Utility\ResultControl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use App\Models\Complaints;
use App\Models\SysCurrency;
use App\Models\SystemEventCategory;
use App\Models\UserPayment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;



class ShareController extends Controller
{


    public function feed()
    {
        return view('share.feed');
    }


    public function posts()
    {

        $post_share = UserShare::where('share_content_type', 1)->get();
        $post_share_count = $post_share->count();
        $post_comment = UserShare::where('share_content_type', 1)->sum('count_comments');
        $post_like = UserShare::where('share_content_type', 1)->sum('count_likes');

        return view('share.posts', [
            "post_comment" => $post_comment,
            "post_like" => $post_like,
            "post_share" => $post_share,
            "post_share_count" => $post_share_count
        ]);

    }

    public function photos()
    {

        $photo_share = UserShare::where('share_content_type', 2)->get();
        $photo_share_count = $photo_share->count();
        $photo_comment = UserShare::where('share_content_type', 2)->sum('count_comments');
        $photo_like = UserShare::where('share_content_type', 2)->sum('count_likes');

        return view('share.photos', [
            "photo_comment" => $photo_comment,
            "photo_like" => $photo_like,
            "photo_share" => $photo_share,
            "photo_share_count" => $photo_share_count
        ]);

    }

    public function videos()
    {

        $video_share = UserShare::where('share_content_type', 3)->get();
        $video_share_count = $video_share->count();
        $video_comment = UserShare::where('share_content_type', 3)->sum('count_comments');
        $video_like = UserShare::where('share_content_type', 3)->sum('count_likes');

        return view('share.videos', [
            "video_comment" => $video_comment,
            "video_like" => $video_like,
            "video_share" => $video_share,
            "video_share_count" => $video_share_count
        ]);

    }


    public function posts_dataservice(Request $request){
        $inputs = $request->all();

        $data = UserShare::where('share_content_type', 1)->orderBy('count_likes','asc');

        if ($request->has('data_type') && $request->input('data_type') == 1) {

            return $this->getDataTable(new DataTables(), $data, $inputs)
                ->addColumn('detail', function ($query){
                    return '<a href="/share/posts/'.$query->id.'/status" class="">Detay</a>';
                })
                ->rawColumns(['detail',])
                ->make(true);
        }

        return  ResultControl::Success('', $data->get());
    }



    public function photos_dataservice(Request $request){
        $inputs = $request->all();

        $data = UserShare::where('share_content_type', 2)->orderBy('count_likes','asc');

        if ($request->has('data_type') && $request->input('data_type') == 1) {

            return $this->getDataTable(new DataTables(), $data, $inputs)
                ->addColumn('detail', function ($query){
                    return '<a href="/share/photos/'.$query->id.'/status" class="">Detay</a>';
                })
                ->rawColumns(['detail',])
                ->make(true);
        }

        return  ResultControl::Success('', $data->get());
    }


    public function videos_dataservice(Request $request){

        $inputs = $request->all();

        $data = UserShare::where('share_content_type', 3)->orderBy('count_likes','asc');

            if ($request->has('data_type') && $request->input('data_type') == 1) {

                return $this->getDataTable(new DataTables(), $data, $inputs)
                    ->addColumn('detail', function ($query){
                        return '<a href="/share/videos/'.$query->id.'/status" class="">Detay</a>';
                    })
                    ->rawColumns(['detail',])
                    ->make(true);
            }

        return  ResultControl::Success('', $data->get());
    }

}