<?php

namespace App\Http\Controllers;

use App\Modules\User\UserService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private $_service;
    public function __construct(UserService $service)
    {
        $this->_service = $service;
    }

    public function register(Request $request) {
        $data = $request->all();
        $user = $this->_service->registerUser($data);
        if (!$user) {
            return response()->json([
                'error' => 'User registration failed'
            ], 400);
        }

        return response()->noContent();
    }

    public function login(Request $request) {
        $data = $request->all();
        $token = $this->_service->login($data);
        if (!$token) {
            return response()->json([
                'error' => 'Invalid credentials'
            ], 401);
        }

        return response([
            "status" => "success"
        ], 200)->withCookie(
            cookie(
                'token',
                $token,
                config('jwt.ttl'),
                '/',
                null,
                true,
                true,
                false,
                "None"
            )
        );
    }


}
