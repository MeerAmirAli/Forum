<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function login(Request $req){

        $credentials = [

            'email' => $req->email,
            'password' => $req->password

        ];

    if(Auth::attempt($credentials)){
        session()->flash('response', [
            'status' => 'success',
            'message' => 'User Login Successfully'
        ]);
        return back();
    }else{
        session()->flash('response', [
            'status' => 'error',
            'message' => 'Incorrect Credentials'
        ]);
        return back();
    };

    }

    public function showLogin(){
        return view('login');
    }
}
