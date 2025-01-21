<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@aubergelm.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'Employé 001',
            'email' => 'staff@aubergelm.com',
            'password' => Hash::make('password'),
            'role' => 'staff',
        ]);

        User::factory()->create([
            'name' => 'Client 001',
            'email' => 'guest@aubergelm.com',
            'password' => Hash::make('password'),
            'role' => 'guest',
        ]);

        $this->call([
            ActivitySeeder::class,
        ]);

        $this->call([
            GuestsSeeder::class,
        ]);

        $this->call([
            LodgingSeeder::class,
        ]);

        $this->call([
            RoomReservationSeeder::class,
        ]);

        $this->call([
            ActivityReservationSeeder::class,
        ]);
    }
}
