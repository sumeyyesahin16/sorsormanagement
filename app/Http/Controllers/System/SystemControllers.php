<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;

class SystemControllers extends Controller
{
    public function main(){
        return view('system.main_showcase');
    }

    public function discover(){
        return view('system.discover_showcase');
    }

}