<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::with('activity', 'user')->orderBy('reservation_date', 'desc')->paginate();
        return response()->json([
            'reservations' => $reservations,
            'message' => 'Réservations récupérées avec succès!'
        ]);
    }

    public function show($reservation_id)
    {
        $reservation = Reservation::find($reservation_id);
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

        $reservation = Reservation::create($validatedData);

        return response()->json([
            'reservation' => $reservation,
            'message' => 'Réservation effectuée avec succès!'
        ], 201);
    }


    public function update(Request $request, Reservation $reservation)
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

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return response()->json([
            'message' => 'Réservation supprimée avec succès!'
        ], 200);
    }
}
