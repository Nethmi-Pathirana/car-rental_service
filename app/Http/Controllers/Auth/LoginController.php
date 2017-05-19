<?php

namespace App\Http\Controllers\Auth;

//use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    //login method
    public function login(Request $request)
    {
            $result=DB::select("SELECT * FROM `login_details` WHERE `login_details`.`email` = ?;",[$request['email']]);
            $password=$result[0]->password;
            $email =$result[0]->email;
            if ($password==$request['password']){
                return view('admin/welcome')->with('user', $result[0])->with('message','Login successful!');
            }
            else{
                return view('auth/login')->with('message', 'Login failed. Invalid email or password');
            }

    }


    public function getLogin(Request $request){
        $result=DB::select("SELECT `email` FROM `login_details` WHERE `login_details`.`email` = ?;",[Auth::user()->email]);
        return View('admin/welcome')->with('user',$result[0]);

    }
    //logout method
    public function logout()
    {
        Auth::logout();
        return view('auth/login')->with('message', 'You are now logged out');
    }
}