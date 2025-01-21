<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $guests = [
            [
                'name' => 'Aurélie Dupont',
                'email' => 'aurelie.dupont@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'role' => 'guest',
                'phone' => '514-123-4567',
                'address' => '123 rue Sainte-Catherine, Montréal, QC H2X 1K5',
                'image' => 'https://randomuser.me/api/portraits/women/29.jpg'
            ],
            [
                'name' => 'Léa Martin',
                'email' => 'lea.martin@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'role' => 'guest',
                'phone' => '418-901-2345',
                'address' => '456 rue Saint-Jean, Québec, QC G1R 1P3',
                'image' => 'https://randomuser.me/api/portraits/women/28.jpg'
            ],
            [
                'name' => 'Matthieu Durand',
                'email' => 'matthieu.durand@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'role' => 'guest',
                'phone' => '450-111-2222',
                'address' => '789 rue Notre-Dame, Laval, QC H7X 2E4',
                'image' => 'https://randomuser.me/api/portraits/men/27.jpg'
            ],
            [
                'name' => 'Anaïs Leroy',
                'email' => 'anais.leroy@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'role' => 'guest',
                'phone' => '819-333-4444',
                'address' => '901 rue Saint-Laurent, Gatineau, QC J8T 6Z9',
                'image' => 'https://randomuser.me/api/portraits/women/26.jpg'
            ],
            [
                'name' => 'Romain Petit',
                'email' => 'romain.petit@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'role' => 'guest',
                'phone' => '514-555-6666',
                'address' => '234 rue Sherbrooke, Montréal, QC H2X 1H8',
                'image' => 'https://randomuser.me/api/portraits/men/25.jpg'
            ],
            [
                'name' => 'Louna Marchand',
                'email' => 'louna.marchand@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'role' => 'guest',
                'phone' => '450-777-8888',
                'address' => '345 rue des Laurentides, Laval, QC H7G 2H5',
                'image' => 'https://randomuser.me/api/portraits/women/24.jpg'
            ],
            [
                'name' => 'Gabriel Renault',
                'email' => 'gabriel.renault@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'role' => 'guest',
                'phone' => '819-999-0000',
                'address' => '456 rue Maisonneuve, Gatineau, QC J8T 6T9',
                'image' => 'https://randomuser.me/api/portraits/men/23.jpg'
            ],
            [
                'name' => 'Chloé Dumont',
                'email' => 'chloe.dumont@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'role' => 'guest',
                'phone' => '514-888-9999',
                'address' => '567 rue Saint-Denis, Montréal, QC H2X 3L7',
                'image' => 'https://randomuser.me/api/portraits/women/22.jpg',
            ],
            [
                'name' => 'Julia Lefebvre',
                'email' => 'julia.lefebvre@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'role' => 'guest',
                'phone' => '450-111-2222',
                'address' => '678 rue Sainte-Catherine, Laval, QC H7X 2E4',
                'image' => 'https://randomuser.me/api/portraits/women/21.jpg',
            ],
            [
                'name' => 'Noah Dubois',
                'email' => 'noah.dubois@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'role' => 'guest',
                'phone' => '819-333-4444',
                'address' => '789 rue Saint-Laurent, Gatineau, QC J8T 6Z9',
                'image' => 'https://randomuser.me/api/portraits/men/20.jpg',
            ],
            [
                'name' => 'Lola Lafontaine',
                'email' => 'lola.lafontaine@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'role' => 'guest',
                'phone' => '514-555-6666',
                'address' => '901 rue Sherbrooke, Montréal, QC H2X 1H8',
                'image' => 'https://randomuser.me/api/portraits/women/19.jpg',
            ],
            [
                'name' => 'Émile Bédard',
                'email' => 'emile.bedard@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'role' => 'guest',
                'phone' => '438-876-5432',
                'address' => '1234, rue Sainte-Catherine, Montréal, QC H3B 1H1',
                'image' => 'https://randomuser.me/api/portraits/men/18.jpg',
            ],
            [
                'name' => 'Aurélie Gagnon',
                'email' => 'aurelie.gagnon@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'role' => 'guest',
                'phone' => '514-234-5678',
                'address' => '4567, chemin Queen-Mary, Montréal, QC H3W 1X4',
                'image' => 'https://randomuser.me/api/portraits/women/17.jpg',
            ],
            [
                'name' => 'Léa Tremblay',
                'email' => 'lea.tremblay@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'role' => 'guest',
                'phone' => '450-111-2222',
                'address' => '789, rue Notre-Dame, Saint-Lambert, QC J4R 2H7',
                'image' => 'https://randomuser.me/api/portraits/women/16.jpg',
            ],
            [
                'name' => 'Matthieu Bergeron',
                'email' => 'matthieu.bergeron@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'role' => 'guest',
                'phone' => '581-333-4444',
                'address' => '1011, rue Saint-Jean, Québec, QC G1R 1R2',
                'image' => 'https://randomuser.me/api/portraits/men/15.jpg',
            ],
            [
                'name' => 'Gabrielle Lajoie',
                'email' => 'gabrielle.lajoie@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'role' => 'guest',
                'phone' => '418-555-6666',
                'address' => '1213, avenue Maguire, Québec, QC G1T 1Z2',
                'image' => 'https://randomuser.me/api/portraits/women/14.jpg',
            ],
            [
                'name' => 'Cédric Bouchard',
                'email' => 'cedric.bouchard@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'role' => 'guest',
                'phone' => '514-777-8888',
                'address' => '1314, rue Sherbrooke, Montréal, QC H3G 1H3',
                'image' => 'https://randomuser.me/api/portraits/men/13.jpg',
            ],
            [
                'name' => 'Audrey Lapointe',
                'email' => 'audrey.lapointe@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'role' => 'guest',
                'phone' => '450-999-0000',
                'address' => '1415, chemin Chambly, Longueuil, QC J4L 1N9',
                'image' => 'https://randomuser.me/api/portraits/women/12.jpg',
            ],
            [
                'name' => 'Raphaël Girard',
                'email' => 'raphael.girard@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'role' => 'guest',
                'phone' => '581-444-5555',
                'address' => '1516, rue Saint-Paul, Québec, QC G1K 3X2',
                'image' => 'https://randomuser.me/api/portraits/men/11.jpg',
            ],
            [
                'name' => 'Noémie Simard',
                'email' => 'noemie.simard@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'role' => 'guest',
                'phone' => '514-666-7777',
                'address' => '1617, avenue du Mont-Royal, Montréal, QC H2J 1Z5',
                'image' => 'https://randomuser.me/api/portraits/women/10.jpg',
            ]
        ];

        foreach ($guests as $guest) {
            User::create($guest);
        }
    }
}
