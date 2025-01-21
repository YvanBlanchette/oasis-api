<?php

namespace Database\Seeders;

use App\Models\ActivityReservation;
use Illuminate\Database\Seeder;

class ActivityReservationSeeder extends Seeder
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
            for ($activityId = 1; $activityId <= 8; $activityId++) {
                $reservationDate = date('Y-m-d', rand($summerStartTimestamp, $summerEndTimestamp));
                $reservationTime = date('H:i:s', strtotime(rand(9, 17) . ':00:00'));
                $nbParticipants = rand(1, 10);
                $totalPrice = rand(50, 200);

                ActivityReservation::create([
                    'activity_id' => $activityId,
                    'user_id' => $userId,
                    'reservation_date' => $reservationDate,
                    'reservation_time' => $reservationTime,
                    'nb_participants' => $nbParticipants,
                    'total_price' => $totalPrice,
                ]);
            }
        }

        // Réservations d'hiver
        for ($userId = 4; $userId <= 23; $userId++) {
            for ($activityId = 9; $activityId <= 16; $activityId++) {
                $reservationDate = date('Y-m-d', rand($winterStartTimestamp, $winterEndTimestamp));
                $reservationTime = date('H:i:s', strtotime(rand(9, 17) . ':00:00'));
                $nbParticipants = rand(1, 10);
                $totalPrice = rand(50, 200);

                ActivityReservation::create([
                    'activity_id' => $activityId,
                    'user_id' => $userId,
                    'reservation_date' => $reservationDate,
                    'reservation_time' => $reservationTime,
                    'nb_participants' => $nbParticipants,
                    'total_price' => $totalPrice,
                ]);
            }
        }
    }
}