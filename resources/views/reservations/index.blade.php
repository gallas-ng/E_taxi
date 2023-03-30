@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    <div class="text text-center" style="font-size: Large;" > Liste des Reservations. </div> 
		<div class="row align-items-center">
			@foreach($reservations as $reservation)
        	<div class="col-md-14">
                <div class="card  mb-2">
                        <div class="card-header" style="background-color: #1acc8d;color:white" >Numero: {{ $reservation->id }} | Passager:  {{ $reservation->client->prenom}} {{ $reservation->client->nom}}</div>
                        <div class="card-body" >
                            <h5 class="card-title"> <u>Depart:</u>  {{ $reservation->adresse_depart }}</h5>
							<h6 class="card-subtitle mb-2 text-muted">Latitude: {{ $reservation->d_latitude }} Longitude: {{ $reservation->d_longitude }}</h6>
                            <h5 class="card-title"> <u>Arrivée:</u> {{ $reservation->adresse_arrivee }}</h5>
							<h6 class="card-subtitle mb-2 text-muted">Latitude: {{ $reservation->a_latitude }} Longitude: {{ $reservation->a_longitude }}</h6>
							<h6 class="card-subtitle mb-2 text-muted"><u>Duree estimée:</u> {{ $reservation->dure }} minutes</h6>
							<h6 class="card-subtitle mb-2 text-muted"><u>Trajet:</u> {{ $reservation->distance }} Km</h6>
							<h6 class="card-subtitle mb-2 text-muted"><u> Prix:</u> {{ $reservation->prix }} </h6>
                            @if($reservation->etat == 'A')
							<h6 class="card-subtitle mb-2 text-muted"><u>Etat:</u> En Attente </h6>
							<h6 class="card-subtitle mb-2"><u>Chauffeur:</u> Aucun </h6>
                            @elseif($reservation->etat == 'C')
							<h6 class="card-subtitle mb-2 text-muted"><u>Etat:</u> En Cours </h6>
							<h6 class="card-subtitle mb-2"><u>Chauffeur:</u> {{ $reservation->chauffeur->prenom}} {{ $reservation->chauffeur->nom}} </h6>
                            @else
							<h6 class="card-subtitle mb-2 text-muted"><u>Etat:</u> Terminée </h6>
							<h6 class="card-subtitle mb-2"><u>Chauffeur:</u> {{ $reservation->chauffeur->prenom}} {{ $reservation->chauffeur->nom}} </h6>
                            @endif
                        </div>
                </div>    
            </div>
			@endforeach
        </div>
    </div>
</div>


@endsection