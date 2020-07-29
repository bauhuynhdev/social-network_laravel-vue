<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Login;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function login(Login $request)
    {
        $params = $request->only(['email', 'password']);
        if (!$token = auth()->attempt($params)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function me()
    {
        return $this->respondSuccess(
            auth()->user()
        );
    }

    public function refresh()
    {
        return $this->respondWithToken(
            auth()->refresh()
        );
    }


    public function logout()
    {
        auth()->logout();

        return $this->respondNoContent();
    }
}
