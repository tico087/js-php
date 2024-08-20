<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request): JsonResponse
    {
        $email = $request->json('email');
        $password = $request->json('password');

        if (!$this->validateEmail($email)) {
            return response()->json(['error' => 'Erro ao Validar Email'], 403);
        }

        if (!$this->validatePassword($email, $password)) {
            return response()->json(['error' => 'Erro ao Validar Senha'], 403);
        }

        return response()->json(["response" => 'success', 'message' => "Usuário Logado"], 200);
    }


    private function validateEmail(string $email): bool
    {
        if (!$this->getUserByEmail($email)) {
            return false;
        }
        return true;
    }

    private function validatePassword(string $email, string $password): bool
    {
        $user = $this->getUserByEmail($email);
        if (!Hash::check($password,$user->password) || strlen($password) < 6) {
            return false;
        }
        return true;
    }

    private function getUserByEmail(string $email): ?User
    {
        return User::where('email', $email)->first() ?? null;
    }
}
