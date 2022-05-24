<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Users;

class UserController extends Controller
{
    public function index(){
        return view('user.index');
    }

    public function commission(){
        $user=Users::where('username','o')->first();
        return $user;
    }

    public function tracking(){
        return view('user.tracking');
    }
}