<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lodging;

class LodgingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Auberges (100 chambres dans 3 bâtiments)
        for ($i = 1; $i <= 100; $i++) {
            $building = chr(64 + ($i % 3 + 1)); // A, B ou C
            $lodging = new Lodging();
            $lodging->room_number = str_pad($i, 3, '0', STR_PAD_LEFT);
            $lodging->category = 'auberge';
            $lodging->building = $building;
            $lodging->capacity = rand(1, 4);
            $lodging->price = rand(100, 300);
            $lodging->save();
        }

        // Condos (16 condos)
        for ($i = 1; $i <= 16; $i++) {
            $lodging = new Lodging();
            $lodging->room_number = 'C' . str_pad($i, 2, '0', STR_PAD_LEFT);
            $lodging->category = 'condo';
            $lodging->building = null;
            $lodging->capacity = rand(4, 8);
            $lodging->price = rand(300, 600);
            $lodging->save();
        }

        // Chalets (3 chalets)
        for ($i = 1; $i <= 3; $i++) {
            $lodging = new Lodging();
            $lodging->room_number = 'CH' . str_pad($i, 2, '0', STR_PAD_LEFT);
            $lodging->category = 'chalet';
            $lodging->building = null;
            $lodging->capacity = rand(8, 12);
            $lodging->price = rand(600, 1000);
            $lodging->save();
        }
    }
}
