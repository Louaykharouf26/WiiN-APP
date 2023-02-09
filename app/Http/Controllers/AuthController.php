<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    public function sign(Request $request)
    {
        $username = $request->input('username');

        if (!$username) {
            return response()->json(['error' => 'Bad Request'], 400);
        }

        $user = User::where('username', $username)->first();

        if (! $user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        Auth::login($user);

        $token = $user->createToken('Token Name')->accessToken;

        return response()->json(['token' => $token]);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => Auth::guard('api')->factory()->getTTL() * 60
        ]);
    }
}


