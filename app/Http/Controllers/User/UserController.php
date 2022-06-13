<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Complaints;
use App\Models\SystemEventCategory;
use App\Models\User;
use App\Models\UserPayment;
use App\Models\UserVerifyRequest;
use App\Utility\ResultControl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function index(){
        $user=User::orderby('id')->get();
        return view('user.index',[
           'user'=>$user
        ]);
    }


    public function commission(){
        return view('user.commission');
    }

    public function verifyRequests(){

        return view('user.verify_requests');
    }



    public function userProfile($usr,$status){
        // Status true = Editable
        // Status false = Status

        $usr=User::where('id',$usr)
            ->first();

        $usrAmount=UserPayment::where('user_id',$usr->id)->sum('amount');
        $usrCoin=UserPayment::where('user_id',$usr->id)->sum('coin');


        if ($status=="status"){
            return view('user.user_control',[
                'user'=>$usr,
                'usrAmount'=>$usrAmount,
                'usrCoin'=>$usrCoin
            ]);
        }

        if ($status=="edit"){
            return view('user.user_edit',[
                'user'=>$usr
            ]);
        }

    }



    public function dataservice(Request $request){
        $inputs = $request->all();

        $data = User::orderBy('id','asc');

        if ($request->has('data_type') && $request->input('data_type') == 1) {

            return $this->getDataTable(new DataTables(), $data, $inputs)
                ->addColumn('detail', function ($query){
                    return '<a href="/user/'.$query->id.'/status" class="">Detail</a>';
                })
                ->rawColumns(['detail',])
             ->make(true);
        }

        return  ResultControl::Success('', $data->get());
    }


    public function verify_dataservice(Request $request){
        $inputs = $request->all();

        $data = UserVerifyRequest::where('user_verify_requests.verify_status',1)
            ->orderby('user_id','asc')
            ->join('users','users.id','=','user_verify_requests.user_id');

        if ($request->has('data_type') && $request->input('data_type') == 1) {

            return $this->getDataTable(new DataTables(), $data, $inputs)
                ->addColumn('detail', function ($query){
                    return '<a href="/user/'.$query->id.'" class="">Detail</a>';
                })
                ->rawColumns(['detail',])
                ->make(true);
        }

        return  ResultControl::Success('', $data->get());
    }


    //Verify Control

    public function verifyControl($usr){

            $user=User::where('id',$usr)->first();
            $usrverify=UserVerifyRequest::where('user_id',$user->id)->first();

            return view('user.user_verify_control',[
                'usr'=>$user,
                'usrverify'=>$usrverify
            ]);
    }

    public function verify(Request $request){

        $data=$request->all();
        UserVerifyRequest::where('user_id',$request->id)
            ->update([
                'verify_status'=>$data['stt']
            ]);
        User::where('user_id',$request->id)
            ->update([
                'verify_status'=>$data['stt']
            ]);

        return [
            'success'   => true,
            'data'      => $data
        ];
    }


}