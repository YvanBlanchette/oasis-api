<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use AuthorizesRequests;

    // List all users
    public function index()
    {
        $users = User::where('email', 'not like', '%@oasis.com')
            ->orderBy('displayName', 'asc')
            ->get();

        return response()->json(
            [
                'users' => $users,
                'message' => 'La liste des utilisateurs à récupérée de la bd avec succès!'
            ],
            200
        );
    }

    // Show a specific user
    public function show(User $user)
    {
        $user = User::where('id', $user->id)->first();
        return response()->json($user);
    }

    // Create a new user
    public function store(Request $request)
    {

        $userData = $request->all();

        $user = User::create($userData);

        return response()->json([
            'user' => $user,
            'message' => 'Utilisateur enregistré dans la bd avec succès!'
        ], 201);
    }


    public function update(Request $request, $user_id)
    {
        $user = User::where('id', $user_id)->first();

        $userData = $request->all();

        $user->update($userData);

        return response()->json([
            'user' => $user,
            'message' => 'Utilisateur modifié dans la bd avec succès!'
        ], 200);
    }

    // Supprimer un utilisateur
    public function destroy($user_id)
    {
        $user = User::where('id', $user_id)->first();

        $user->delete();

        return response()->json([
            'message' => 'Utilisateur supprimé de la bd avec succès!'
        ], 200);
    }
}
