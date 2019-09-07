<?php

namespace App\Http\Controllers\Api;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request){
        $validatedData = $request->validate([
            'name'=>'required|max:55',
            'email'=>'email|required|unique:users',
            'password'=>'required|confirmed' 
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $user = User::create($validatedData);
        $accessToken = $user->createToken('authToken')->accessToken;
        return response(['user'=>$user,'accessToken'=>$accessToken]);
    }

    public function login(Request $request){
        $loginData = $request->validate([
            'email'=>'email|required',
            'password'=>'required'
        ]);  
        if(!Auth::attempt($loginData)){
            return response(['message'=>'Invalid Credentials']);
        }
        $accessToken = Auth::user()->createToken('authToken')->accessToken;
        return response(['user'=>Auth::user(),'accessToken'=>$accessToken]);
    }

}
