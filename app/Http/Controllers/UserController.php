<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use AuthorizesRequests;

    // List all users
    public function index()
    {
        $users = User::all();
        $guests = User::where('role', 'guest')->get();
        $staffs = User::where('role', 'staff')->where('role', '!=', 'admin')->get();
        $admins = User::where('role', 'admin')->get();

        return response()->json(
            [
                'users' => $users,
                'guests' => $guests,
                'staffs' => $staffs,
                'admins' => $admins,
                'message' => 'Liste des utilisateurs récupérée avec succès!'
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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'role' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
            'image' => 'required|string',
        ]);

        $user = User::create($validatedData);

        return response()->json([
            'user' => $user,
            'message' => 'Utilisateur enregistré avec succès!'
        ], 201);
    }


    public function update(Request $request, User $user)
    {
        $this->authorize('update', $user);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'required|confirmed',
            'role' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
            'image' => 'required|string',
        ]);

        $user->update($validatedData);

        return response()->json([
            'user' => $user,
            'message' => 'Utilisateur modifié avec succès!'
        ], 200);
    }

    // Supprimer un utilisateur
    public function destroy(User $user)
    {
        $this->authorize('delete', $user);

        $user->delete();

        return response()->json([
            'message' => 'Utilisateur supprimé avec succès!'
        ], 200);
    }
}
