<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'username' => 'required|unique:clients',
            'password' => 'required|min:8',
            'email' => 'required|email',
            'nik' => 'required|digits:16',
            'namalengkap' => 'required|max:255',
            'notelp' => 'required',
            'alamat' => 'required',
        ]);

        $user = Client::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'NIK' => $request->nik,
            'namalengkap' => $request->namalengkap,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat,
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function login(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:8',
        ]);

        if(!Auth::guard('client')->attempt($request->only('username', 'password'))){
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }

        $user = Client::where('username', $request->username)->firstOrFail();
        $token = $user->createToken('auth_token')->plainTextToken;
        $data = [
            'id' => $user->id,
            'username' => $user->username,
            'email' => $user->email,
            'NIK' => $user->NIK,
            'namalengkap' => $user->namalengkap,
            'notelp' => $user->notelp,
            'alamat' => $user->alamat,
        ];

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'data' => $data,
        ]);
    }


    public function logout(Request $request){
        $user = $request->user();
        $user->tokens()->delete();

        return response()->json([
            'message' => 'Berhasil logout'
        ]);
    }
}
