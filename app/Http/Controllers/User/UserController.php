<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Complaints;
use App\Models\SysCurrency;
use App\Models\SystemEventCategory;
use App\Models\User;
use App\Models\UserPayment;
use App\Models\UserShare;
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

    public function usersVerified(){
        return view('user.verified_user');
    }

    public function user_post_detail($post_id){
       $user_post_detail= UserShare::where('id',$post_id)->first();
        return view('user.post_detail',[
            'post_id'=>$post_id,
            'user_post_detail'=>$user_post_detail
        ]);
    }



    public function userProfile($usr,$status){
        // Status true = Editable
        // Status false = Status

        $usr=User::where('id',$usr)
            ->first();

        $usrAmount=UserPayment::where('user_id',$usr->id)->sum('amount');
        $usrCoin=UserPayment::where('user_id',$usr->id)->sum('coin');


        if ($status=="status"){
            return view('user.user_profile',[
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

    public function editProfile(Request $request){
        $data=$request->all();
        User::where('username',$data['username'])->update([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'phone'=>$data['phone'],
            'bio'=>$data['bio'],
            'verify_status'=>$data['verify_status'],
            'is_pro'=>$data['is_pro']
        ]);
        return redirect()->back();
    }

    public function dataservice(Request $request){
        $inputs = $request->all();

        $data = User::orderBy('id','asc');

        if ($request->has('data_type') && $request->input('data_type') == 1) {

            return $this->getDataTable(new DataTables(), $data, $inputs)
                ->addColumn('detail', function ($query){
                    return '<a href="/user/profile/'.$query->id.'/status" class="btn btn-primary">Detail</a>';
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
                    return '<a href="/user/profile/'.$query->id.'/verify_control" class="">Detail</a>';
                })
                ->rawColumns(['detail',])
                ->make(true);
        }

        return  ResultControl::Success('', $data->get());
    }

    public function verifiedDataservice(Request $request){
        $inputs = $request->all();

        $data = User::join('user_verify_requests','user_verify_requests.user_id','=','users.id')
            ->orderBy('count_followers','desc')
            ->where('user_verify_requests.verify_status',2);

        if ($request->has('data_type') && $request->input('data_type') == 1) {

            return $this->getDataTable(new DataTables(), $data, $inputs)
                ->addColumn('detail', function ($query){
                    return '<a href="/user/profile/'.$query->id.'/status" class="">Detail</a>';
                })
                ->rawColumns(['detail',])
                ->make(true);
        }
        return  ResultControl::Success('', $data->get());
    }


    public function shareDataservice(Request $request){
        $inputs = $request->all();

        $data = User::join('user_shares','user_shares.user_id','=','users.id')
            ->orderBy('user_shares.id','desc');

        if ($request->has('data_type') && $request->input('data_type') == 1) {

            return $this->getDataTable(new DataTables(), $data, $inputs)
                ->addColumn('share_content_type', function ($query){
                   switch ($query->share_content_type){
                       default:
                           return "Undefined";
                       case 1:
                           return "Text";
                       case 2:
                           return "Photo";
                       case 3:
                           return "Video";

                   }
                })

                ->addColumn('detail', function ($query){
                    return '<a href="/user/profile/'.$query->id.'/post_detail" class="btn btn-outline-primary">Detail</a>';
                })
                ->rawColumns(['detail','share_content_type'])
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

    // JS-POST being verified controller
    public function verify(Request $request){

        $data=$request->all();

        UserVerifyRequest::where('user_id',$data['id'])
            ->update([
                'verify_status'=>intval($data['stt'])
            ]);
        User::where('id',$data['id'])
            ->update([
                'verify_status'=>intval($data['stt'])
            ]);

        return [
            'success'   => true,
            'data'      => $data
        ];
    }


}