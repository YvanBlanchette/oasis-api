<?php

namespace Database\Seeders;

use App\Models\RoomReservation;
use Illuminate\Database\Seeder;

class RoomReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Définir les dates d'été et d'hiver
        $summerStartDate = '2023-06-01';
        $summerEndDate = '2023-08-31';
        $winterStartDate = '2023-12-01';
        $winterEndDate = '2024-02-28';

        $summerStartTimestamp = strtotime($summerStartDate);
        $summerEndTimestamp = strtotime($summerEndDate);
        $winterStartTimestamp = strtotime($winterStartDate);
        $winterEndTimestamp = strtotime($winterEndDate);

        // Réservations d'été
        for ($userId = 4; $userId <= 23; $userId++) {
            for ($lodgingId = 1; $lodgingId <= 100; $lodgingId++) {
                $arrivalDate = date('Y-m-d', rand($summerStartTimestamp, $summerEndTimestamp));
                $departureDate = date('Y-m-d', strtotime($arrivalDate . ' + ' . rand(3, 7) . ' days'));
                $nbGuests = rand(1, 4);
                $price = rand(100, 500);

                RoomReservation::create([
                    'lodging_id' => $lodgingId,
                    'user_id' => $userId,
                    'arrival_date' => $arrivalDate,
                    'departure_date' => $departureDate,
                    'nb_guests' => $nbGuests,
                    'total_price' => $price,
                ]);
            }
        }

        // Réservations d'hiver
        for ($userId = 4; $userId <= 23; $userId++) {
            for ($lodgingId = 1; $lodgingId <= 100; $lodgingId++) {
                $arrivalDate = date('Y-m-d', rand($winterStartTimestamp, $winterEndTimestamp));
                $departureDate = date('Y-m-d', strtotime($arrivalDate . ' + ' . rand(3, 7) . ' days'));
                $nbGuests = rand(1, 4);
                $price = rand(100, 500);

                RoomReservation::create([
                    'lodging_id' => $lodgingId,
                    'user_id' => $userId,
                    'arrival_date' => $arrivalDate,
                    'departure_date' => $departureDate,
                    'nb_guests' => $nbGuests,
                    'total_price' => $price,
                ]);
            }
        }
    }
}