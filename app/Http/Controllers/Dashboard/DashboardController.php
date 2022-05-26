<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;

class DashboardController
{

    public function index(){
        $id=User::orderby('id','desc')
            ->first();
        return view('app.dashboard',[
            "id"=>$id
        ]);
    }

}