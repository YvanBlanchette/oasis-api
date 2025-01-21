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
                'name' => 'Baignade dans le lac',
                'description' => 'La baignade dans le lac est une activité idéale pour les chaudes journées d\'été. Vous pouvez vous détendre sur la plage ou plonger dans l\'eau fraîche pour vous rafraîchir.',
                'image' => '/images/swim.jpg',
                'category' => 'summer',
                'status' => true,
                'pricePerAdult' => 0,
                'pricePerChildren' => 0,
                'durationInMinutes' => 0,
                'ageRestriction' => 'Tous âges',
                'isIncluded' => true,
                'notes' => 'Vérifier les conditions de baignade auprès du personnel avant de vous lancer dans l\'eau.'
            ],
            [
                'name' => 'Excursion en Canoe',
                'description' => 'L\'excursion en canoe est une activité idéale pour les amoureux de la nature. Vous pouvez explorer les rives du lac et découvrir la faune et la flore locale.',
                'image' => '/images/canoe.jpg',
                'category' => 'summer',
                'status' => true,
                'pricePerAdult' => 20,
                'pricePerChildren' => 10,
                'durationInMinutes' => 60,
                'ageRestriction' => '8+',
                'isIncluded' => false,
                'notes' => 'L\'accès à l\'eau est gratuit pour les clients qui apportent leurs propres canots ou kayaks.'
            ],
            [
                'name' => 'Excursion en véhicule tout terrain',
                'description' => 'L\'excursion en véhicule tout terrain est une activité idéale pour les amoureux de l\'aventure. Vous pouvez explorer les sentiers de la forêt et découvrir les paysages locaux.',
                'image' => '/images/atv.jpg',
                'category' => 'summer',
                'status' => true,
                'pricePerAdult' => 30,
                'pricePerChildren' => 20,
                'durationInMinutes' => 90,
                'ageRestriction' => '12+',
                'isIncluded' => false,
                'notes' => 'Le port d\'équipements de sécurité est requis.'
            ],
            [
                'name' => 'Randonnée pédestre',
                'description' => 'La randonnée pédestre est une activité idéale pour les amoureux de la nature. Vous pouvez explorer les sentiers de la forêt et découvrir les paysages locaux.',
                'image' => '/images/pedestre.jpg',
                'category' => 'all',
                'status' => true,
                'pricePerAdult' => 0,
                'pricePerChildren' => 0,
                'durationInMinutes' => 0,
                'ageRestriction' => 'Tous âges',
                'isIncluded' => true,
                'notes' => 'Plus de 20 magnifiques sentiers à explorer!'
            ],
            [
                'name' => 'Pistes d\'hébertisme',
                'description' => 'Les pistes d\'hébertisme sont une activité idéale pour les amoureux de l\'aventure. Vous pouvez explorer les obstacles et découvrir vos limites.',
                'image' => '/images/ebertisme.jpg',
                'category' => 'summer',
                'status' => true,
                'pricePerAdult' => 0,
                'pricePerChildren' => 0,
                'durationInMinutes' => 0,
                'ageRestriction' => '10+',
                'isIncluded' => true,
                'notes' => ''
            ],
            [
                'name' => 'Pèche',
                'description' => 'La pèche est une activité idéale pour les amoureux de la nature. Vous pouvez explorer les rives du lac et découvrir les poissons locaux.',
                'image' => '/images/fishing.jpg',
                'category' => 'summer',
                'status' => true,
                'pricePerAdult' => 20,
                'pricePerChildren' => 10,
                'durationInMinutes' => 60,
                'ageRestriction' => '8+',
                'isIncluded' => false,
                'notes' => 'L\'accès à l\'eau est gratuit pour les clients qui apportent leurs propres équipement de pèche et qui ont un permis de pèche.'
            ],
            [
                'name' => 'Tir à l\'arc',
                'description' => 'Le tir à l\'arc est une activité idéale pour les amoureux du sport et de la précision. Vous pouvez apprendre les techniques de base et essayer de toucher la cible.',
                'image' => '/images/bow.jpg',
                'category' => 'summer',
                'status' => true,
                'pricePerAdult' => 25,
                'pricePerChildren' => 15,
                'durationInMinutes' => 75,
                'ageRestriction' => '10+',
                'isIncluded' => true,
                'notes' => ''
            ],
            [
                'name' => 'Fatbike',
                'description' => 'Le fatbike est une activité idéale pour les amoureux du vélo et de l\'aventure. Vous pouvez explorer les sentiers de la forêt et découvrir les paysages locaux.',
                'image' => '/images/fatbike.jpg',
                'category' => 'summer',
                'status' => true,
                'pricePerAdult' => 30,
                'pricePerChildren' => 20,
                'durationInMinutes' => 90,
                'ageRestriction' => '12+',
                'isIncluded' => false,
                'notes' => 'Les pistes de fatBike sont accessibles gratuitement pour les clients qui apportent leurs propres fatBike.'
            ],
            [
                'name' => 'Excursion en raquettes',
                'description' => 'L\'excursion en raquettes est une activité idéale pour les amoureux de la nature et de l\'hiver. Vous pouvez explorer les sentiers de la forêt et découvrir les paysages locaux.',
                'image' => '/images/raquette.jpg',
                'category' => 'winter',
                'status' => true,
                'pricePerAdult' => 25,
                'pricePerChildren' => 15,
                'durationInMinutes' => 90,
                'ageRestriction' => '10+',
                'isIncluded' => true,
                'notes' => 'Des raquettes sont disponibles à la location sur place.'
            ],
            [
                'name' => 'Excursion en ski de fond',
                'description' => 'L\'excursion en ski de fond est une activité idéale pour les amoureux de la nature et de l\'hiver. Vous pouvez explorer les sentiers de la forêt et découvrir les paysages locaux.',
                'image' => '/images/ski.jpg',
                'category' => 'winter',
                'status' => true,
                'pricePerAdult' => 25,
                'pricePerChildren' => 15,
                'durationInMinutes' => 90,
                'ageRestriction' => '12+',
                'isIncluded' => true,
                'notes' => 'Des skis sont disponibles à la location sur place, le port d\'un casque est fortement suggéré.'
            ],
            [
                'name' => 'Excursion en motoneige',
                'description' => 'L\'excursion en motoneige est une activité idéale pour les amoureux de l\'aventure et de l\'hiver. Vous pouvez explorer les sentiers de la forêt et découvrir les paysages locaux.',
                'image' => '/images/snowmobile.jpg',
                'category' => 'winter',
                'status' => true,
                'pricePerAdult' => 40,
                'pricePerChildren' => 25,
                'durationInMinutes' => 120,
                'ageRestriction' => '16+',
                'isIncluded' => false,
                'notes' => 'Les pistes de motoneige peuvent avoir des conditions de glace, le port d\'un casque, de lunettes et de gants de ski est requis.'
            ],
            [
                'name' => 'Excursion en traîneau à chiens',
                'description' => 'L\'excursion en traîneau à chiens est une activité idéale pour les amoureux de la nature et de l\'hiver. Vous pouvez explorer les sentiers de la forêt et découvrir les paysages locaux.',
                'image' => '/images/dogsled.jpg',
                'category' => 'winter',
                'status' => true,
                'pricePerAdult' => 50,
                'pricePerChildren' => 30,
                'durationInMinutes' => 120,
                'ageRestriction' => '10+',
                'isIncluded' => false,
                'notes' => 'La demande pour cette activité est forte, alors la réservation est fortement suggérée.'
            ],
            [
                'name' => 'Glissade en tubes',
                'description' => 'La glissade en tubes est une activité idéale pour les amoureux de l\'hiver et de l\'aventure. Vous pouvez explorer les pentes de neige et découvrir les sensations de la glissade.',
                'image' => '/images/tube.jpg',
                'category' => 'winter',
                'status' => true,
                'pricePerAdult' => 0,
                'pricePerChildren' => 0,
                'durationInMinutes' => 0,
                'ageRestriction' => '6+',
                'isIncluded' => true,
                'notes' => ''
            ],
            [
                'name' => 'Pèche sur glace',
                'description' => 'La pèche sur glace est une activité idéale pour les amoureux de la pèche et de l\'hiver. Vous pouvez explorer les lacs gelés et découvrir les poissons locaux.',
                'image' => '/images/iceFishing.jpg',
                'category' => 'winter',
                'status' => true,
                'pricePerAdult' => 30,
                'pricePerChildren' => 20,
                'durationInMinutes' => 90,
                'ageRestriction' => '10+',
                'isIncluded' => false,
                'notes' => 'Nos chefs cuisiniers se feront un plaisir de cuisiner vos prises gratuitement après votre excursion.'
            ],
            [
                'name' => 'Excursion en Fatbike hivernal',
                'description' => 'Le fatbike hivernal est une activité idéale pour les amoureux du vélo et de l\'hiver. Vous pouvez explorer les sentiers de la forêt et découvrir les paysages locaux.',
                'image' => '/images/fatbike--winter.jpg',
                'category' => 'winter',
                'status' => true,
                'pricePerAdult' => 35,
                'pricePerChildren' => 25,
                'durationInMinutes' => 105,
                'ageRestriction' => '12+',
                'isIncluded' => false,
                'notes' => 'Les pistes sont accessibles gratuitement pour les clients qui apportent leur propre fatBike.'
            ],
            [
                'name' => 'Patinage',
                'description' => 'Le patinage est une activité idéale pour les amoureux de la glace et de l\'hiver. Vous pouvez explorer les patinoires et découvrir les sensations de la glisse.',
                'image' => '/images/skate.jpg',
                'category' => 'winter',
                'status' => true,
                'pricePerAdult' => 20,
                'pricePerChildren' => 10,
                'durationInMinutes' => 90,
                'ageRestriction' => '6+',
                'isIncluded' => true,
                'notes' => 'Des patins sont disponible à la location sur place.'
            ]
        ];

        foreach ($activities as $activity) {
            Activity::create($activity);
        }
        ;
    }
}
