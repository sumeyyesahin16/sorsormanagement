<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\SystemEventCategory;
use App\Models\User;
use App\Models\UserPayment;
use App\Utility\ResultControl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function tracking(){
        return view('user.tracking');
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
                    return '<a href="/user/'.$query->id.'/status" class="">Detay</a>';
                })
                ->rawColumns(['detail',])
             ->make(true);
        }

        return  ResultControl::Success('', $data->get());
    }

}