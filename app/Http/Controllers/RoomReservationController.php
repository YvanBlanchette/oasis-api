<?php

namespace App\Http\Controllers;

use App\Models\RoomReservation;
use Illuminate\Http\Request;

class RoomReservationController extends Controller
{
    public function index()
    {
        $reservations = RoomReservation::with('lodging', 'user')->orderBy('arrival_date', 'desc')->paginate();
        return response()->json([
            'reservations' => $reservations,
            'message' => 'Réservations récupérées avec succès!'
        ]);
    }

    public function show($reservation_id)
    {
        $reservation = RoomReservation::find($reservation_id)->with('lodging', 'user')->first();
        return response()->json([
            'reservation' => $reservation,
            'message' => 'Réservation récupérée avec succès!'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'lodging_id' => 'required|integer',
            'user_id' => 'required|integer',
            'arrival_date' => 'required|date',
            'departure_date' => 'required|date',
            'nb_guests' => 'required|integer',
            'total_price' => 'required|decimal:10,2',
        ]);

        $reservation = RoomReservation::create($validatedData);

        return response()->json([
            'reservation' => $reservation,
            'message' => 'Réservation crée avec succès!'
        ], 201);
    }


    public function update(Request $request, RoomReservation $reservation)
    {
        $validatedData = $request->validate([
            'lodging_id' => 'required|integer',
            'user_id' => 'required|integer',
            'arrival_date' => 'required|date',
            'departure_date' => 'required|date',
            'nb_guests' => 'required|integer',
            'total_price' => 'required|decimal:10,2',
        ]);

        $reservation->update($validatedData);

        return response()->json([
            'reservation' => $reservation,
            'message' => 'Réservation mise à jour avec succès!'
        ], 200);
    }

    public function destroy(RoomReservation $reservation)
    {
        $reservation->delete();

        return response()->json([
            'message' => 'Réservation supprimée avec succès!'
        ], 200);
    }
}
