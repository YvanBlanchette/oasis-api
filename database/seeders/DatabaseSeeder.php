<?php

namespace Database\Seeders;

use App\Models\Staff;
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
        Staff::factory()->create([
            'displayName' => 'Admin',
            'email' => 'admin@oasis.com',
            'password' => Hash::make('password'),
            'phone' => '514-123-4567',
            'address' => '123 rue Sainte-Catherine, Montréal, QC H2X 1K5',
            'photoURL' => 'https://randomuser.me/api/portraits/men/29.jpg',
            'role' => 'admin',
            'status' => 'active',
            'hireDate' => now(),
        ]);

        Staff::factory()->create([
            'displayName' => 'Employé',
            'email' => 'staff@oasis.com',
            'password' => Hash::make('password'),
            'phone' => '514-123-4567',
            'address' => '234 boulevard Saint-Jean, Montréal, QC H2X 1K5',
            'photoURL' => 'https://randomuser.me/api/portraits/women/29.jpg',
            'role' => 'staff',
            'status' => 'active',
            'hireDate' => now(),
        ]);

        User::factory()->create([
            'displayName' => 'Client',
            'email' => 'client@oasis.com',
            'password' => Hash::make('password'),
        ]);

        Staff::factory(10)->create();

        $this->call([
            ActivitySeeder::class,
        ]);

        $this->call([
            GuestsSeeder::class,
        ]);

        $this->call([
            ReservationSeeder::class,
        ]);
    }
}
