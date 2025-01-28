<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $startDate = Carbon::now()->subYear();
        $endDate = Carbon::now();

        for ($i = 0; $i < 200; $i++) {
            $userId = rand(4, 20);
            $activityId = rand(1, 16);
            $reservationDate = Carbon::createFromTimestamp(rand($startDate->timestamp, $endDate->timestamp));
            $reservationTime = Carbon::createFromTime(rand(9, 17), 0, 0);
            $nbParticipants = rand(1, 10);
            $totalPrice = rand(50, 200);

            Reservation::create([
                'activity_id' => $activityId,
                'user_id' => $userId,
                'reservation_date' => $reservationDate->format('Y-m-d'),
                'reservation_time' => $reservationTime->format('H:i:s'),
                'nb_participants' => $nbParticipants,
                'total_price' => $totalPrice,
            ]);
        }
    }
}