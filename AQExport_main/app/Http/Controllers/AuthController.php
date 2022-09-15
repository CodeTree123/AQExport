<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_info;
use Session;


class AuthController extends Controller
{
    public function login(){

        return view('user.login');
    }

    public function login_user(Request $request){
        $request->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ]);
        $user =  user_info::where('email','=',$request->email)->first();
        if($user){
            if($request->password==$user->password){
                // if($user->role == 1){
                //     $request->session()->put('loginId',$user->id);
                //     return redirect()->route('admin');
                // }else{
                // $request->session()->put('loginId',$user->id);
                // return redirect()->route('doctor');
                // }
                $request->session()->put('loginId',$user->id);
                return redirect()->route('product_details');
            }else{
                return back() ->with('fail','Password not Matches');
            }
        }else{
            return back() ->with('fail','Enter Email Properly');
        }
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }
}
