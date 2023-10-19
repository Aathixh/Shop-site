<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index(){
        return view('admin.login');
    }

    public function login(Request $request){
        $request->validate(['name'=> 'required']);
        $request->validate(['email'=> 'required']);
        $request->validate(['phn_num'=>'']);
        $request->validate(['password'=> 'required']);

        $newuser = User::create([
            'name'=> $request->input('name'),
            'email'=> $request->input('email'),
            'password'=> bcrypt($request->input('password')),
            'phn_num'=>$request->input('phn_num'),
        ]);
    }
}
