<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function login(){
        if (Auth::check()){
            return redirect()->route('index');
        }
        return view('login.login');
    }

    public function loginCheck(Request $request){
        if ($request->has('username') || $request->has('password')){
            $login=User::where('username',$request->username)->first();

            if ($login && Hash::check($request->password,$login->password)){
                Auth::loginUsingId($login->id);
                return redirect()->route('index');
            }
            else{
                return redirect()->route('error')->with('error','Invalid Name or Password');
            }
        }
        else {
            return redirect()->back();
        }
    }

    public function logOut(){
        if (Auth::check()){
            Auth::logout();
            return redirect()->route('login');
        }
        else{
            return redirect()->route('index');
        }
    }

    public function error(){
        return view('login.error');
    }


}