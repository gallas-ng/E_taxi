<?php
  
namespace Database\Seeders;

use App\Models\Evaluation;
use App\Models\Paiement;
use App\Models\Reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class ReservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservations = [
            [
                'client_id' => 1,
                'chauffeur_id' => 1,
                'dure' => 12,
                'distance' => 7,
                'adresse_depart' => 'Ngor',
                'adresse_arrivee' => 'Almadies',
                'd_latitude' => 23.4,
                'd_longitude' => 34.2,
                'a_latitude' => 21.4,
                'a_longitude' => 34.9,
                'prix' => 1300,
                'etat' => 'T',
            ],
            [
                'client_id' => 2,
                'chauffeur_id' => 1,
                'dure' => 12,
                'distance' => 8,
                'adresse_depart' => 'Ngor',
                'adresse_arrivee' => 'Ouakam',
                'd_latitude' => 23.2,
                'd_longitude' => 33.2,
                'a_latitude' => 22.4,
                'a_longitude' => 31.9,
                'prix' => 1500,
                'etat' => 'T',
            ],
            [
                'client_id' => 3,
                'chauffeur_id' => 1,
                'dure' => 18,
                'distance' => 9,
                'adresse_depart' => 'Ngor',
                'adresse_arrivee' => 'Dieuppeul',
                'd_latitude' => 23.4,
                'd_longitude' => 34.2,
                'a_latitude' => 25.4,
                'a_longitude' => 31.9,
                'prix' => 2000,
                'etat' => 'C',
            ],
            [
                'client_id' => 1,
                'chauffeur_id' => 2,
                'dure' => 10,
                'distance' => 6,
                'adresse_depart' => 'Sicap',
                'adresse_arrivee' => 'Mermoz',
                'd_latitude' => 22.4,
                'd_longitude' => 32.2,
                'a_latitude' => 21.9,
                'a_longitude' => 34.1,
                'prix' => 1300,
                'etat' => 'C',
            ],
            [
                'client_id' => 1,
             
                'dure' => 19,
                'distance' => 12,
                'adresse_depart' => 'Sicap',
                'adresse_arrivee' => 'HLM',
                'd_latitude' => 26.4,
                'd_longitude' => 32.2,
                'a_latitude' => 21.9,
                'a_longitude' => 34.3,
                'prix' => 2000,
                
            ],
            [
                'client_id' => 3,
                'chauffeur_id' => 4,
                'dure' => 12,
                'distance' => 7,
                'adresse_depart' => 'Ngor',
                'adresse_arrivee' => 'Almadies',
                'd_latitude' => 23.4,
                'd_longitude' => 34.2,
                'a_latitude' => 21.4,
                'a_longitude' => 34.9,
                'prix' => 1300,
                'etat' => 'T',
            ],
            [
                'client_id' => 4,
                'chauffeur_id' => 6,
                'dure' => 12,
                'distance' => 7,
                'adresse_depart' => 'Dieuppeul',
                'adresse_arrivee' => 'Mermoz',
                'd_latitude' => 23.4,
                'd_longitude' => 34.2,
                'a_latitude' => 21.4,
                'a_longitude' => 34.9,
                'prix' => 1500,
                'etat' => 'C',
            ],
            [
                'client_id' => 6,
                'chauffeur_id' => 2,
                'dure' => 12,
                'distance' => 7,
                'adresse_depart' => 'Ngor',
                'adresse_arrivee' => 'Almadies',
                'd_latitude' => 23.4,
                'd_longitude' => 34.2,
                'a_latitude' => 21.4,
                'a_longitude' => 34.9,
                'prix' => 1300,
                'etat' => 'C',
            ],
            [
                'client_id' => 2,
                'chauffeur_id' => 2,
                'dure' => 19,
                'distance' => 10,
                'adresse_depart' => 'HLM',
                'adresse_arrivee' => 'Ouakam',
                'd_latitude' => 23.4,
                'd_longitude' => 34.2,
                'a_latitude' => 21.4,
                'a_longitude' => 34.9,
                'prix' => 2500,
                'etat' => 'T',
            ],
            [
                'client_id' => 1,
            
                'dure' => 12,
                'distance' => 7,
                'adresse_depart' => 'Mamelles',
                'adresse_arrivee' => 'Mermoz',
                'd_latitude' => 23.4,
                'd_longitude' => 34.2,
                'a_latitude' => 21.4,
                'a_longitude' => 34.9,
                'prix' => 1300,
   
            ],
        ];

        $paiements = [
            [
                'reservation_id' => 1,
                'montant' => 1300,
                'mode' => 'Wave',
                'debiteur' => '784553300'
            ],
            [
                'reservation_id' => 2,
                'montant' => 1500,
                'mode' => 'Wave',
                'debiteur' => '784553300'
            ],
            [
                'reservation_id' => 3,
                'montant' => 2000,
                'mode' => 'Wave',
                'debiteur' => '784553300'
            ],
            [
                'reservation_id' => 4,
                'montant' => 1300,
                'mode' => 'Orange Money',
                'debiteur' => '784553300'
            ],
            [
                'reservation_id' => 5,
                'montant' => 2000,
                'mode' => 'Wave',
                'debiteur' => '784553300'
            ],
            [
                'reservation_id' => 6,
                'montant' => 1300,
                'mode' => 'Carte_Credit',
                'debiteur' => '784553300'
            ],
            [
                'reservation_id' => 7,
                'montant' => 1500,
                'mode' => 'Carte_Credit',
                'debiteur' => '784553300'
            ],
            [
                'reservation_id' => 8,
                'montant' => 1300,
                'mode' => 'Wave',
                'debiteur' => '784553300'
            ],
            [
                'reservation_id' => 9,
                'montant' => 2500,
                'mode' => 'Cash',
                'debiteur' => '784553300'
            ],
            [
                'reservation_id' => 10,
                'montant' => 1300,
                'mode' => 'Cash',
                'debiteur' => '784553300'
            ]
        ];

        $evaluations = [
            [
                'reservation_id' => 1,
                'note' => 4,
                'commentaire' => 'Voyage Agreable',
            ],
            [
                'reservation_id' => 2,
                'note' => 4,
                'commentaire' => 'Superbe Voyage',
            ],
            [
                'reservation_id' => 3,
                'note' => 2,
                'commentaire' => 'Trop Lent!!!',
            ],
            [
                'reservation_id' => 4,
                'note' => 2,
                'commentaire' => 'Manque de Confort',
            ],
            [
                'reservation_id' => 5,
                'note' => 5,
                'commentaire' => 'Excellente Tournee!!!',
            ],
        ];

        foreach ($reservations as $key => $reservation) {
            Reservation::create($reservation);
        }
        foreach ($paiements as $key => $paiement) {
            Paiement::create($paiement);
        }
        foreach ($evaluations as $key => $evaluation) {
            Evaluation::create($evaluation);
        }
    }
}
