<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Register a new user
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = User::create($validatedData);

        if (!$user) {
            return response()->json([
                'error' => 'Une erreur s\'est produite lors de la création du compte'
            ], 500);
        }

        $token = $user->createToken('auth-token' . ' - ' . $user->name)->plainTextToken;

        return response()->json([
            'token' => $token,
            'message' => 'Inscription réussie, Bienvenue ' . $user->name . '!'
        ]);
    }



    // Login a user
    public function login(Request $request)
    {
        if (
            !auth()->attempt([
                'email' => $request->email,
                'password' => $request->password
            ])
        ) {
            return response()->json([
                'error' => 'Identifiant ou mot de passe incorrect'
            ], 401);
        }

        $user = auth()->user();


        $token = auth()->user()->createToken('auth-token' . ' - ' . $user->name, expiresAt: now()->addMinutes(60))->plainTextToken;

        return response()->json([
            'token' => $token,
            'message' => 'Connexion réussie, Bienvenue ' . $user->name . '!'
        ], 200);
    }



    // Logout a user
    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        $user = auth()->user();

        return response()->json([
            'message' => 'Déconnexion réussie, Aurevoir ' . $user->name . '!'
        ], 200);
    }



    // Get the user's account infos
    public function getUser()
    {
        $user = auth()->user();

        return response()->json([
            'user' => $user,
        ], 200);
    }
}
