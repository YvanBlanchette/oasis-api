<?php

namespace App\Http\Controllers;

use App\Models\Lodging;
use Illuminate\Http\Request;

class LodgingController extends Controller
{
    public function index()
    {
        $lodgings = Lodging::all();
        $rooms = Lodging::where('category', 'auberge')->get();
        $condos = Lodging::where('category', 'condo')->get();
        $cabins = Lodging::where('category', 'chalet')->get();
        return response()->json([
            'lodgings' => $lodgings,
            'rooms' => $rooms,
            'condos' => $condos,
            'cabins' => $cabins,
            'message' => 'Hébergements chargées avec succès!'
        ]);
    }

    public function show($lodging_id)
    {
        $lodging = Lodging::find($lodging_id);
        return response()->json([
            'lodging' => $lodging,
            'message' => 'Hébergement récupérée avec succès!'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'room_number' => 'required|string|max:10',
            'category' => 'required|string',
            'building' => 'nullable|string',
            'capacity' => 'required|integer',
            'price' => 'required|decimal:10,2',
        ]);

        $lodging = Lodging::create($validatedData);

        return response()->json([
            'lodging' => $lodging,
            'message' => 'Hébergement crée avec succès!'
        ], 201);
    }


    public function update(Request $request, Lodging $lodging)
    {
        $validatedData = $request->validate([
            'room_number' => 'required|string|max:10',
            'category' => 'required|string',
            'building' => 'required|string',
            'capacity' => 'required|integer',
            'price' => 'required|decimal:10,2',
        ]);

        $lodging->update($validatedData);

        return response()->json([
            'lodging' => $lodging,
            'message' => 'Hébergement mise à jour avec succès!'
        ], 200);
    }

    public function destroy(Lodging $lodging)
    {
        $lodging->delete();

        return response()->json([
            'message' => 'Hébergement supprimée avec succès!'
        ], 200);
    }
}
