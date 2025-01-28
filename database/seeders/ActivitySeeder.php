<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activities = [
            [
                "name" => "Plongée en apnée",
                "description" => "La plongée en apnée est une activité idéale pour les amoureux de la mer et de l'aventure.",
                "image" => "/images/freediving.jpg",
                "status" => true,
                "pricePerAdult" => 40,
                "pricePerChildren" => 25,
                "durationInMinutes" => 120,
                "ageRestriction" => "16 ans et +",
                "isIncluded" => false,
                "notes" => "Le port d'un équipement de plongée est requis."
            ],
            [
                "name" => "Aquaforme",
                "description" => "L'aquaforme est une activité idéale pour les amoureux de l'eau et de la forme physique.",
                "image" => "/images/aquaforme.jpg",
                "status" => true,
                "pricePerAdult" => 0,
                "pricePerChildren" => 0,
                "durationInMinutes" => 90,
                "ageRestriction" => "Tous les ages",
                "isIncluded" => true,
                "notes" => ""
            ],
            [
                "name" => "Kayak",
                "description" => "Le kayak est une activité idéale pour les amoureux de la mer et de l'aventure.",
                "image" => "/images/kayak.jpg",
                "status" => true,
                "pricePerAdult" => 25,
                "pricePerChildren" => 15,
                "durationInMinutes" => 90,
                "ageRestriction" => "10 ans et +",
                "isIncluded" => false,
                "notes" => ""
            ],
            [
                "name" => "Paddleboard",
                "description" => "Le paddleboard est une activité idéale pour les amoureux de l'eau et de la forme physique.",
                "image" => "/images/paddleboard.jpg",
                "status" => true,
                "pricePerAdult" => 20,
                "pricePerChildren" => 10,
                "durationInMinutes" => 90,
                "ageRestriction" => "10 ans et +",
                "isIncluded" => false,
                "notes" => ""
            ],
            [
                "name" => "Voile",
                "description" => "La voile est une activité idéale pour les amoureux de la mer et de l'aventure.",
                "image" => "/images/sail.jpg",
                "status" => true,
                "pricePerAdult" => 40,
                "pricePerChildren" => 25,
                "durationInMinutes" => 120,
                "ageRestriction" => "16 ans et +",
                "isIncluded" => false,
                "notes" => "Le port d'une veste de flotaison est requis."
            ],
            [
                "name" => "Plongée sous-marine",
                "description" => "La plongée sous-marine est une activité idéale pour les amoureux de la mer et de l'aventure.",
                "image" => "/images/scubadiving.jpg",
                "status" => true,
                "pricePerAdult" => 50,
                "pricePerChildren" => 30,
                "durationInMinutes" => 150,
                "ageRestriction" => "16 ans et +",
                "isIncluded" => false,
                "notes" => "Le port d'un équipement de plongée est requis."
            ],
            [
                "name" => "Surf",
                "description" => "Le surf est une activité idéale pour les amoureux de la mer et de l'aventure.",
                "image" => "/images/surf.jpg",
                "status" => true,
                "pricePerAdult" => 40,
                "pricePerChildren" => 25,
                "durationInMinutes" => 120,
                "ageRestriction" => "16 ans et +",
                "isIncluded" => false,
                "notes" => "Le port d'un équipement de surf est requis."
            ],
            [
                "name" => "Kitesurf",
                "description" => "Le kitesurf est une activité idéale pour les amoureux de la mer et de l'aventure.",
                "image" => "/images/kitesurf.jpg",
                "status" => true,
                "pricePerAdult" => 50,
                "pricePerChildren" => 30,
                "durationInMinutes" => 150,
                "ageRestriction" => "16 ans et +",
                "isIncluded" => false,
                "notes" => "Le port d'un équipement de kitesurf est requis."
            ],
            [
                "name" => "Baignade supervisée",
                "description" => "La baignade supervisée est une activité idéale pour les amoureux de l'eau et de la forme physique.",
                "image" => "/images/swimming.jpg",
                "status" => true,
                "pricePerAdult" => 0,
                "pricePerChildren" => 0,
                "durationInMinutes" => 0,
                "ageRestriction" => "Tous les ages",
                "isIncluded" => true,
                "notes" => ""
            ],
            [
                "name" => "Yoga",
                "description" => "Le yoga est une activité idéale pour les amoureux de la mise en forme et de la méditation.",
                "image" => "/images/beachyoga.jpg",
                "status" => true,
                "pricePerAdult" => 30,
                "pricePerChildren" => 20,
                "durationInMinutes" => 90,
                "ageRestriction" => "10 ans et +",
                "isIncluded" => true,
                "notes" => ""
            ],
            [
                "name" => "Volleyball de plage",
                "description" => "Le volleyball de plage est une activité idéale pour les amoureux de la plage.",
                "image" => "/images/volleyball.jpg",
                "status" => true,
                "pricePerAdult" => 0,
                "pricePerChildren" => 0,
                "durationInMinutes" => 90,
                "ageRestriction" => "10 ans et +",
                "isIncluded" => true,
                "notes" => ""
            ],
            [
                "name" => "Cours de Salsa",
                "description" => "La danse de plage est une activité idéale pour les amoureux de la plage.",
                "image" => "/images/dance.jpg",
                "status" => true,
                "pricePerAdult" => 0,
                "pricePerChildren" => 0,
                "durationInMinutes" => 90,
                "ageRestriction" => "Tous les ages",
                "isIncluded" => true,
                "notes" => ""
            ],
            [
                "name" => "Tour de catamaran",
                "description" => "Le tour de catamaran est une activité idéale pour les amoureux de la mer et de l'aventure.",
                "image" => "/images/catamaran.jpg",
                "status" => true,
                "pricePerAdult" => 50,
                "pricePerChildren" => 25,
                "durationInMinutes" => 90,
                "ageRestriction" => "10 ans et +",
                "isIncluded" => false,
                "notes" => ""
            ],
            [
                "name" => "Pêche en haute mer",
                "description" => "La pêche en haute mer est une activité idéale pour les amoureux de la pêche et de l'aventure.",
                "image" => "/images/biggamefishing.jpg",
                "status" => true,
                "pricePerAdult" => 75,
                "pricePerChildren" => 50,
                "durationInMinutes" => 180,
                "ageRestriction" => "16 ans et +",
                "isIncluded" => false,
                "notes" => "Le port d'un équipement de pêche est requis."
            ],
            [
                "name" => "Plongée nocturne",
                "description" => "La plongée nocturne est une activité idéale pour les amoureux de la mer et de l'aventure.",
                "image" => "/images/nightdiving.jpg",
                "status" => true,
                "pricePerAdult" => 60,
                "pricePerChildren" => 40,
                "durationInMinutes" => 120,
                "ageRestriction" => "16 ans et +",
                "isIncluded" => false,
                "notes" => "Le port d'un équipement de plongée est requis."
            ],
            [
                "name" => "Cours de plongée",
                "description" => "Le cours de plongée en piscine est une activité idéale pour les débutants qui veulent apprendre les bases de la plongée.",
                "image" => "/images/snorkelingcourse.jpg",
                "status" => true,
                "pricePerAdult" => 40,
                "pricePerChildren" => 25,
                "durationInMinutes" => 90,
                "ageRestriction" => "12 ans et +",
                "isIncluded" => false,
                "notes" => "Une certification PADI est remise à la fin du cours"
            ]
        ];

        foreach ($activities as $activity) {
            Activity::create($activity);
        }
        ;
    }
}
