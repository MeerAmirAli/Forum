<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\password;

class signupController extends Controller
{
    public function signup(Request $req){
    // return $req;

    $req->validate([
        'username' => 'required|min:4',
        'email' => 'required|email|unique:users',
        'pass' => 'required|min:8',
        'confirm_pass' => 'required|same:pass'
    ]);
    
    try{

        DB::beginTransaction();
    
    $user = User::create([
        'name' => $req->username,
        'email' => $req->email,
        'password' => $req->pass
    ]);

    $user->markEmailAsVerified();

    DB::commit();


    session()->flash('response', [
        'status' => 'success',
        'message' => 'User Registered Successfully'
    ]);

    return back();


}catch(Exception $error){

DB::rollBack();

return "Cannot Create User";


}

    }
        public function showSignup(){
            return view('signup');
        }

    }
