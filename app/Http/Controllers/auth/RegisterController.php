<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('auth.login');
    }

    public function register(Request $request){
        $request->validate(['name'=> 'required']);
        $request->validate(['email'=> 'required']);
        $request->validate(['phn_num'=>'']);
        $request->validate(['password'=> 'required|confirmed']);
        $request->validate(['password_confirmation'=> 'required']);

        $newuser = User::create([
            'name'=> $request->input('name'),
            'email'=> $request->input('email'),
            'password'=> Hash::make($request->input('password')),
            'phn_num'=>$request->input('phn_num'),
        ]);

        Auth::login($newuser);

        return redirect('/home');
    }
}
