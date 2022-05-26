<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Utility\ResultControl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function index(){

        $user=User::orderby('id')->limit(10)->get();
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

    public function dataservice(Request $request){

        $inputs = $request->all();

        $data = User::orderBy('id','asc');

        if ($request->has('data_type') && $request->input('data_type') == 1) {

            return $this->getDataTable(new DataTables(), $data, $inputs)
                ->addColumn('detail', function ($query) {

                })->rawColumns(['is_active', 'detail', 'staff'])->make(true);
        }
        return  ResultControl::Success('', $data->get());

    }
}