<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\SystemEventCategory;
use App\Models\User;
use App\Utility\ResultControl;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class EventsController extends Controller
{
    public function index(){
        return view('event.events');
    }

    public function events(){
        return view('event.events_category');
    }

    public function addEventCategory(Request $request){
        $add=new SystemEventCategory();
        $add->name=$request->categoryName;
        $add->description=$request->description;
        $add->save();
        return redirect()->route('events');
    }

    public function eventDataService(Request $request){

        $inputs = $request->all();
        $data = Event::orderBy('id','asc');


        if ($request->has('data_type') && $request->input('data_type') == 1) {

            return $this->getDataTable(new DataTables(), $data, $inputs)
                ->addColumn('edit', function ($query){
                    return '<a href="/user/'.$query->id.'/status" class="btn btn-outline-success">Edit</a>';
                })
                ->addColumn('delete', function ($query){
                    return '<a href="/user/'.$query->id.'/status" class="btn btn-outline-danger">Delete</a>';
                })
                ->rawColumns(['edit','delete',])
                ->make(true);
        }
        return  ResultControl::Success('', $data->get());
    }

    public function dataservice(Request $request){

        $inputs = $request->all();

        $data = SystemEventCategory::orderBy('id','asc');

        if ($request->has('data_type') && $request->input('data_type') == 1) {

            return $this->getDataTable(new DataTables(), $data, $inputs)
                ->addColumn('detail', function ($query){
                    return '<a href="/user/'.$query->id.'/status" class="">Detay</a>';
                })
                ->rawColumns(['detail',])
                ->make(true);
        }
        return  ResultControl::Success('', $data->get());

    }
}