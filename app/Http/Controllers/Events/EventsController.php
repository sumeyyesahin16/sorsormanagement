<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    public function events(){
        return view('event.events');
    }
}