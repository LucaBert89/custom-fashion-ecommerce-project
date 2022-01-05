<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request) {
        $fields = $request->validate([
            "name" => "required|string",
            "email" => "required|unique:users,email",
            "password" => "required|string|confirmed",
            "is_admin" => "boolean"
        ]);
        $user = User::create([
            "name" => $fields["name"],
            "email" => $fields["email"],
            "password" => bcrypt($fields["password"]),
            "is_admin" => $fields["is_admin"]
        ]);

        $token = $user->createToken("token")->plainTextToken;

        $response = [
            "user" => $user,
            "token" => $token
        ];

        return response($response, 201);
    }

    public function loginUser(Request $request) {
        $fields = $request->validate([
            "email" => "required|string",
            "password" => "required|string"
        ]);
        $user = User::where("email", $fields["email"])->first();

        if(!$user || !Hash::check($fields["password"], $user->password)){
            return response([
                "message" => "credentials not valid. Try again"
            ]);
        }

        $token = $user->createToken("token")->plainTextToken;

        $response = [
            "user" => $user,
            "token" => $token
        ];

        return response($response, 201);
    }

    public function logout(Request $request) {
        $request->user()->tokens()->delete();

        return [
            "message" => "logged out"
        ];
    }
}
