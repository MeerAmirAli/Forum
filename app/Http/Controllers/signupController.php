<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\password;

class signupController extends Controller
{
    public function signup(Request $req)
    {
        // return $req;

        $req->validate([
            'username' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);


        try {

            DB::beginTransaction();

            $user = User::create([
                'name' => $req->username,
                'email' => $req->email,
                'password' => Hash::make($req->password)
            ]);

            $user->markEmailAsVerified();

            DB::commit();


            session()->flash('response', [
                'status' => 'success',
                'message' => 'User Registered Successfully'
            ]);

            return back();
        } catch (Exception $error) {

            DB::rollBack();

            return "Cannot Create User";
        }
    }
    public function showSignup()
    {
        return view('signup');
    }
}
