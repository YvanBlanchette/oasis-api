<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
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
    public function getUserReservations(Request $request)
    {
        $user_email = $request['email'];
        $user = User::where('email', $user_email)->first();

        $reservations = Reservation::with('activity', 'user')->where('user_id', $user->id)->orderBy('reservation_date', 'desc')->get();
        return response()->json([
            'reservations' => $reservations,
            'message' => 'Réservations de ' . $user->displayName . ' récupérées avec succès'
        ]);

    }

    public function store(Request $request)
    {

        $user = User::where('email', $request['user_email'])->first();

        $reservation = Reservation::create([
            'activity_id' => $request['activity_id'],
            'user_id' => $user->id,
            'reservation_date' => $request['reservation_date'],
            'reservation_time' => $request['reservation_time'],
            'nb_adults' => $request['nb_adults'],
            'nb_children' => $request['nb_children'],
            'total_price' => $request['total_price'],
        ]);

        return response()->json([
            'reservation' => $reservation,
            'message' => 'Réservation effectuée avec succès!'
        ], 201);
    }


    public function update(Request $request, $reservation_id)
    {
        $reservation = Reservation::find($reservation_id);

        $reservation->update([
            'activity_id' => $request['activity_id'],
            'reservation_date' => $request['reservation_date'],
            'reservation_time' => $request['reservation_time'],
            'nb_adults' => $request['nb_adults'],
            'nb_children' => $request['nb_children'],
            'total_price' => $request['total_price'],
        ]);

        return response()->json([
            'reservation' => $reservation,
            'message' => 'Réservation mise à jour avec succès!'
        ], 200);
    }

    public function destroy($reservation_id)
    {
        $reservation = Reservation::find($reservation_id);
        $reservation->delete();

        return response()->json([
            'message' => 'Réservation supprimée avec succès!'
        ], 200);
    }

    public function removeAllUserReservations(Request $request)
    {
        $user_email = $request->email;
        $user = User::where('email', $user_email)->first();

        $reservations = Reservation::where('user_id', $user->id)->get();

        foreach ($reservations as $reservation) {
            $reservation->delete();
        }
        return response()->json([
            'message' => 'Panier de réservations vidé avec succès'
        ]);

    }
}
