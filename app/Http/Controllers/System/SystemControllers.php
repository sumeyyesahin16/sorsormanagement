<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;

class SystemControllers extends Controller
{
    public function main(){
        $deneme=1;
        return view('system.main_showcase',[
            'deneme'    => $deneme
        ]);
    }

    public function discover(){
        return view('system.discover_showcase');
    }

}