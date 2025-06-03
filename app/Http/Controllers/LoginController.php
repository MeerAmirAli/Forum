<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function store(Request $req)
    {
        $credentials = $req->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/home')->with('response', [
                'status' => 'success',
                'message' => 'User Login Successfully'
            ]);
        }

        return redirect()->back()->with('response', [
            'status' => 'error',
            'message' => 'Incorrect Credentials'
        ]);
    }

    public function showLogin()
    {
        return view('login');
    }
}
