<?php

namespace App\Http\Controllers;

use App\Models\ActivityReservation;
use Illuminate\Http\Request;

class ActivityReservationController extends Controller
{
    public function index()
    {
        $reservations = ActivityReservation::all();
        return response()->json([
            'reservations' => $reservations,
            'message' => 'Réservations récupérées avec succès!'
        ]);
    }

    public function show($reservation_id)
    {
        $reservation = ActivityReservation::find($reservation_id);
        return response()->json([
            'reservation' => $reservation,
            'message' => 'Réservation récupérée avec succès!'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'activity_id' => 'required|integer',
            'user_id' => 'required|integer',
            'reservation_date' => 'required|date',
            'reservation_time' => 'required|time',
            'nb_participants' => 'required|integer',
            'total_price' => 'required|decimal:10,2',
        ]);

        $reservation = ActivityReservation::create($validatedData);

        return response()->json([
            'reservation' => $reservation,
            'message' => 'Réservation crée avec succès!'
        ], 201);
    }


    public function update(Request $request, ActivityReservation $reservation)
    {
        $validatedData = $request->validate([
            'activity_id' => 'required|integer',
            'user_id' => 'required|integer',
            'reservation_date' => 'required|date',
            'reservation_time' => 'required|time',
            'nb_participants' => 'required|integer',
            'price' => 'required|decimal:10,2',
        ]);

        $reservation->update($validatedData);

        return response()->json([
            'reservation' => $reservation,
            'message' => 'Réservation mise à jour avec succès!'
        ], 200);
    }

    public function destroy(ActivityReservation $reservation)
    {
        $reservation->delete();

        return response()->json([
            'message' => 'Réservation supprimée avec succès!'
        ], 200);
    }
}
