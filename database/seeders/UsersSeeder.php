<?php
  
namespace Database\Seeders;

use App\Models\Chauffeur;
use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Vehicule;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehicules = [
            [
                'marque'=> 'Toyota',
                'couleur' => 'Noire',
                'places' => 4
            ],
            [
                'marque'=> 'Citroen',
                'couleur' => 'Bleue',
                'places' => 4
            ],
            [
                'marque'=> 'Nissan',
                'couleur' => 'Noire',
                'places' => 4
            ],
            [
                'marque'=> 'Peugeot',
                'couleur' => 'Jaune',
                'places' => 4
            ],
            [
                'marque'=> 'Renault',
                'couleur' => 'Jaune',
                'places' => 4
            ],
            [
                'marque'=> 'Ford',
                'couleur' => 'Bleue',
                'places' => 4
            ],
            [
                'marque'=> 'Range-Rover',
                'couleur' => 'Noire',
                'places' => 4
            ],
        ];

        $chauffeurs = [
            [
                'nom' => 'Faye',
                'prenom' => 'Serigne',
                'adresse' => 'Dieuppeul-Derkle',
                'email' => 'sfaye@taxi.sn',
                'tel' => '765432234',
                'date_naissance' => date("yy-m-d",strtotime("2000/01/23")),
                'num_permis' => '12343566',
                'vehicule_id' => 1,

            ],
            [
                'nom' => 'Diagne',
                'prenom' => 'Cheikh',
                'adresse' => 'Sicap',
                'email' => 'cdiagne@taxi.sn',
                'tel' => '764432234',
                'date_naissance' =>   date("yy-m-d",strtotime("1990/07/12")),
                'num_permis' => '12743566',
                'vehicule_id' => 2,

            ],
            [
                'nom' => 'Diop',
                'prenom' => 'Moussa',
                'adresse' => 'Liberte 3',
                'email' => 'mdiop@taxi.sn',
                'tel' => '765436534',
                'date_naissance' =>   date("yy-m-d",strtotime("1994/02/12")),
                'num_permis' => '42343566',
                'vehicule_id' => 3,

            ],
            [
                'nom' => 'Seck',
                'prenom' => 'Assane',
                'adresse' => 'Ngor',
                'email' => 'aseck@taxi.sn',
                'tel' => '779432234',
                'date_naissance' =>   date("yy-m-d",strtotime("1997/01/12")),
                'num_permis' => '82343566',
                'vehicule_id' => 3,

            ],
            [
                'nom' => 'Sall',
                'prenom' => 'Cheikh',
                'adresse' => 'Yoff',
                'email' => 'csall@taxi.sn',
                'tel' => '765422234',
                'date_naissance' =>   date("yy-m-d",strtotime("1999/01/12")),
                'num_permis' => '12043566',
                'vehicule_id' => 4,

            ],
            [
                'nom' => 'Sane',
                'prenom' => 'Lamine',
                'adresse' => 'Fass',
                'email' => 'lsane@taxi.sn',
                'tel' => '786432234',
                'date_naissance' =>   date("yy-m-d",strtotime("2000/01/12")),
                'num_permis' => '12343966',
                'vehicule_id' => 5,

            ],
            [
                'nom' => 'Niang',
                'prenom' => 'Modou',
                'adresse' => 'Almadies',
                'email' => 'mniang@taxi.sn',
                'tel' => '781132234',
                'date_naissance' =>   date("yy-m-d",strtotime("2000/01/23")),
                'num_permis' => '17343966',
                'vehicule_id' => 6,

            ],
        ];

        $clients = [
            [
                'nom' => 'Niang',
                'prenom' => 'Aziz',
                'adresse' => 'Almadies',
                'email' => 'aniang@taxi.sn',
                'tel' => '788132234',
                'sexe' => 'masculin',
                'date_naissance' =>   date("yy-m-d",strtotime("2003/01/23")),
                'num_compte' => '17343066',
            ],
            [
                'nom' => 'Ndiaye',
                'prenom' => 'Anta',
                'adresse' => 'Ngor',
                'email' => 'andiaye@taxi.sn',
                'tel' => '788100234',
                'sexe' => 'feminin',
                'date_naissance' =>   date("yy-m-d",strtotime("2000/06/23")),
                'num_compte' => '17313066',
            ],
            [
                'nom' => 'Seck',
                'prenom' => 'Sadibou',
                'adresse' => 'Cite Avion',
                'email' => 'sseck@taxi.sn',
                'tel' => '780932234',
                'sexe' => 'masculin',
                'date_naissance' =>  date("yy-m-d",strtotime("2001/01/23")),
                'num_compte' => '17343066',
            ],
            [
                'nom' => 'Faye',
                'prenom' => 'Jules',
                'adresse' => 'Ouakam',
                'email' => 'jfaye@taxi.sn',
                'tel' => '770132234',
                'sexe' => 'masculin',
                'date_naissance' =>   date("yy-m-d",strtotime("2000/11/23")),
                'num_compte' => '17343022',
            ],
            [
                'nom' => 'Diop',
                'prenom' => 'Helene',
                'adresse' => 'Liberte 4',
                'email' => 'hdiop@taxi.sn',
                'tel' => '788452234',
                'sexe' => 'feminin',
                'date_naissance' =>   date("yy-m-d",strtotime("2000/11/23")),
                'num_compte' => '17341066',
            ],
            [
                'nom' => 'Gaye',
                'prenom' => 'Aissatou',
                'adresse' => 'Comico',
                'email' => 'agaye@taxi.sn',
                'tel' => '750132234',
                'sexe' => 'feminin',
                'date_naissance' =>   date("yy-m-d",strtotime("2000/01/13")),
                'num_compte' => '17643066',
            ],
            [
                'nom' => 'Diouf',
                'prenom' => 'Ndeye Mari',
                'adresse' => 'Rufisque',
                'email' => 'ndiouf@taxi.sn',
                'tel' => '783332234',
                'sexe' => 'feminin',
                'date_naissance' =>   date("yy-m-d",strtotime("2002/11/23")),
                'num_compte' => '22343066',
            ],
            [
                'nom' => 'Thioub',
                'prenom' => 'Coumba',
                'adresse' => 'Difonce',
                'email' => 'cthioub@taxi.sn',
                'tel' => '778032234',
                'sexe' => 'feminin',
                'date_naissance' =>   date("yy-m-d",strtotime("1999/01/23")),
                'num_compte' => '17343966',
            ],
        ];
        $users = [
            [
               'name'=>'Admin',
               'email'=>'admin@admin.sn',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Serigne Faye',
               'email' => 'sfaye@taxi.sn',
               'type'=> 2,
               'password'=> bcrypt('123456'),
            ],
            [
                'name' => 'Cheikh Diagne',
                'email' => 'cdiagne@taxi.sn',
                'type'=> 2,
                'password'=> bcrypt('123456'),
            ],
            [
                'name' => 'Moussa Diop',
                'email' => 'mdiop@taxi.sn',
                'type'=> 2,
                'password'=> bcrypt('123456'),
            ],
            [
                'name' => 'Assane Seck',
                'email' => 'aseck@taxi.sn',
                'type'=> 2,
                'password'=> bcrypt('123456'),
            ],
            [
                'name' => 'Cheikh Sall',
                'email' => 'csall@taxi.sn',
                'type'=> 2,
                'password'=> bcrypt('123456'),
            ],
            [
                'name' => 'Lamine Sane',
                'email' => 'lsane@taxi.sn',
                'type'=> 2,
                'password'=> bcrypt('123456'),

            ],
            [
                'name' => 'Modou Niang',
                'email' => 'mniang@taxi.sn',
                'type'=> 2,
                'password'=> bcrypt('123456'),

            ],
            [
                'name' => 'Aziz Niang',
                'email' => 'aniang@taxi.sn',
                'type'=> 0,
                'password'=> bcrypt('123456'),
            ],
            [
                'name' => 'Anta Ndiaye',
                'email' => 'andiaye@taxi.sn',
                'type'=> 0,
                'password'=> bcrypt('123456'),
            ],
            [
                'name' => 'Sadibou Seck',
                'email' => 'sseck@taxi.sn',
                'type'=> 0,
                'password'=> bcrypt('123456'),
            ],
            [
                'name' => 'Jules Faye',
                'email' => 'jfaye@taxi.sn',
                'type'=> 0,
                'password'=> bcrypt('123456'),
            ],
            [
                'name' => 'Helene Diop',
                'email' => 'hdiop@taxi.sn',
                'type'=> 0,
                'password'=> bcrypt('123456'),
            ],
            [
                'name' => 'Aissatou Gaye',
                'email' => 'agaye@taxi.sn',
                'type'=> 0,
                'password'=> bcrypt('123456'),
            ],
            [
                'name' => 'Ndeye Mari Diouf',
                'email' => 'ndiouf@taxi.sn',
                'type'=> 0,
                'password'=> bcrypt('123456'),
            ],
            [
                'name' => 'Coumba Thioub',
                'email' => 'cthioub@taxi.sn',
                'type'=> 0,
                'password'=> bcrypt('123456'),
            ],

        ];
    

        foreach ($vehicules as $key => $vehicule) {
            Vehicule::create($vehicule);
        }
        foreach ($chauffeurs as $key => $chauffeur) {
            Chauffeur::create($chauffeur);
        }
        foreach ($clients as $key => $client) {
            Client::create($client);
        }
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}