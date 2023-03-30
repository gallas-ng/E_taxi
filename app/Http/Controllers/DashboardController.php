<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Chauffeur;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function reservationParClient(){
        $reservationsByClient = DB::table('reservations')
        ->join('clients', 'clients.id', '=', 'reservations.client_id')
        ->select(DB::raw('COUNT(*) as total_reservations, clients.nom'))
        ->groupBy('clients.nom')
        ->get();

        $reservationsParEtat = DB::table('reservations')
                  ->select('etat', DB::raw('count(*) as total'))
                  ->groupBy('etat')
                  ->get();

        $reservationsByPayment = DB::table('reservations')
            ->join('paiements', 'paiements.reservation_id', '=', 'reservations.id')
            ->select(DB::raw('count(*) as total, paiements.mode'))
            ->groupBy('paiements.mode')
            ->get();

        $reservations =  DB::table('reservations')
            ->where('reservations.etat', 'T')
            ->select('reservations.chauffeur_id', DB::raw('SUM(reservations.distance) as distance'))
            ->groupBy('reservations.chauffeur_id')
            ->get();

            $data = [];
            foreach ($reservations as $reservation) {
                $chauffeur = Chauffeur::find($reservation->chauffeur_id);
                $data[] = [
                    'name' => $chauffeur->nom . ' ' . $chauffeur->prenom,
                    'distance' => $reservation->distance
                ];
            }


        return view('dashboard', [
            'reservationsByClient' => $reservationsByClient,
            'reservationsParEtat' => $reservationsParEtat,
            'reservationsByPayment' => $reservationsByPayment,
            'data' => $data
        ]);
    }


}
