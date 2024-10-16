<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\RegisterRequest;
use App\Http\Resources\Api\UserResource;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Регстриация пользователя
    public function register(RegisterRequest $request)
    {
        $role_id = Role::where('code', 'user')->first()->id;

        $validated = $request->validated();

        User::create(array_merge($validated,['role_id' => $role_id,]));

        $token = $user->createToken('token')->plainTextToken;

        return response()->json([
            'user' => new UserResource($user),
            'token' => $token
        ])->setStatusCode(201);
    }
    // Авторизация

    // Выход
}
