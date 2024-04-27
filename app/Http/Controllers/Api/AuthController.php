<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //login
    public function login(Request $request)
    {
        $loginData = $request->validate([
            'email' =>'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $loginData ['email'])->first();

        //check user exists
        if (!$user){
            return response(['message' => 'invalid credentials'], 401);
        }

        //check password

        if (!Hash::check($loginData['password'], $user->password)){
            return response(['message' => 'invalid credentials'], 401);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

return response(['user' => $user, ' token' => $token], 200);
    }
}


