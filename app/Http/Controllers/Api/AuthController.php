<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!$token = Auth::guard('api')->attempt($credentials)) {

            return response()->json([
                'message'=>'Credenciales incorrectas'
            ],401);

        }

        return response()->json([
            'token'=>$token,
            'type'=>'Bearer'
        ]);
    }

    public function me()
    {
        return response()->json(
            Auth::guard('api')->user()
        );
    }

    public function refresh()
    {
        return response()->json([
            'token' => Auth::guard('api')->refresh(),
            'type'  => 'Bearer'
        ]);
    }

    public function logout()
    {
        Auth::guard('api')->logout();

        return response()->json([
            'message' => 'Sesión cerrada correctamente'
        ]);
    }

}
