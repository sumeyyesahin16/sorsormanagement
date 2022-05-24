<?php

namespace App\Http\Controllers\Cash;

use App\Http\Controllers\Controller;

class CashController extends Controller
{
    public function sorsorcash(){
        return view('cash.sorsorcash');
    }

    public function commissions(){
        return view('cash.commissions');
    }
}