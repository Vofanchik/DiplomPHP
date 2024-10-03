<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class ApiTokenController extends Controller
{
    public function createToken(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:5'],
        ]);

        if ($validator->fails()) {
            return response()->json(['err' => $validator->errors()]);
        }

        $user = User::where('email', $request->email)->first(); 

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['err' => 'user not found'], 401);
        }

        $token = $user->createToken("API TOKEN")->plainTextToken;
        return ['token' => $token];
    }
}