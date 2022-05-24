<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        return view('user.index');
    }

    public function commission(){
        return view('user.commission');
    }

    public function tracking(){
        return view('user.tracking');
    }
}