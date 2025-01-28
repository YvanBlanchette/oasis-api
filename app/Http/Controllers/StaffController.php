<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    // List all staff members
    public function index()
    {
        $staff = Staff::orderBy('status', 'asc')->orderBy('role', 'asc')->orderBy('displayName', 'asc')->get();

        return response()->json(
            [
                'staff' => $staff,
                'message' => 'La liste des employés à récupérée de la bd avec succès!'
            ],
            200
        );
    }

    // Show a specific staff member
    public function show($staff_id)
    {
        $staff = Staff::where('id', $staff_id)->first();
        return response()->json($staff);
    }


    // Create a new staff member
    public function store(Request $request)
    {
        $staff = Staff::create($request->all());

        return response()->json([
            'staff' => $staff,
            'message' => 'Employé enregistré dans la bd avec succès!'
        ], 201);
    }

    // Update a staff member's data
    public function update(Request $request, $staff_id)
    {
        $staff = Staff::where('id', $staff_id)->first();

        $staffData = $request->all();

        $staff->update($staffData);

        return response()->json([
            'staff' => $staff,
            'message' => 'Employé modifié dans la bd avec succès!'
        ], 200);
    }

    // Toggle staff member status
    public function toggleStatus($staff_id)
    {
        $staff = Staff::where('id', $staff_id)->first();

        $staff->update([
            'status' => !$staff->status,
        ]);

        return response()->json([
            'staff' => $staff,
            'message' => 'Statut de l\'employé mise à jour avec succès!'
        ], 200);
    }

    // Delete a staff member
    public function destroy($staff_id)
    {
        $staff = Staff::where('id', $staff_id)->first();

        $staff->delete();

        return response()->json([
            'message' => 'Employé supprimé de la bd avec succès!'
        ], 200);
    }
}
