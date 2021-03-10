<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email'=> ['required', 'email'],
            'password'=>['required'],
            'device_name'=>['required']
        ]);
        
        // $user = User::where('email', $request->email)->first();

        // if (Auth::attempt($request->only('email','password'))){
        //     return response()->json(Auth::user(), 200);
        // }

        // if (Auth::attempt($request->only('email','password'))){
        //     return $user->createToken($request->device_name)->plainTextToken;
        // }
        
        // throw ValidationException::withMessages([
        //     'email'=>['The provided credentials are incorrect.']
        // ]);
        $user = User::where('email', $request->email)->first();

       if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
      }

      return $user->createToken($request->device_name)->plainTextToken;
        
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();

        return response()->json(['msg'=>'Logout Successful']);
    }
}
