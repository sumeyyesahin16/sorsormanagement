<?php

namespace App\Http\Controllers\Compaints;

use App\Http\Controllers\Controller;

class CompaintsController extends Controller
{
    public function reportedUsers(){
        return view('complaint.reported_user');
    }

    public function help(){
        return view('complaint.help');
    }

}