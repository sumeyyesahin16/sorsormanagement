<?php

namespace App\Http\Controllers\Compaints;

use App\Http\Controllers\Controller;
use App\Models\Complaints;
use App\Models\SystemEventCategory;
use App\Utility\ResultControl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class ComplaintsController extends Controller
{
    public function reportedUsers(){
        return view('complaint.reported_user');
    }

    public function help(){
        return view('complaint.help');
    }

    public function user($usr){
        $data = Complaints::where('user_id',$usr)->join('users','users.id','=','complaints.user_id')->first();
        return view('complaint.complaint_detail',[
            'usr'=>$data
        ]);
    }

    public function dataservice(Request $request){
        $inputs = $request->all();
        $data = Complaints::orderBy('user_id','asc')->join('users','users.id','=','complaints.user_id');

        if ($request->has('data_type') && $request->input('data_type') == 1) {

            return $this->getDataTable(new DataTables(), $data, $inputs)
                ->addColumn('detail', function ($query){
                    return '<a href="/complaints/'.$query->id.'/detail" class="">Detail</a>';
                })
                ->rawColumns(['detail'])
                ->make(true);
        }
        return  ResultControl::Success('', $data->get());
    }
}