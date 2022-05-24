<?php

namespace App\Http\Controllers\Share;

use App\Http\Controllers\Controller;

class ShareController extends Controller
{

    public function feed(){
        return view('share.feed');
    }

    public function photos(){
        return view('share.photos');
    }

    public function videos(){
        return view('share.videos');
    }

    public function posts(){
        return view('share.posts');
    }

}