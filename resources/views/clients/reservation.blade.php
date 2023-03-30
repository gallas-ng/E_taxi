@extends('layouts.app')

@section('content')
<?php
use App\Models\Client;
use Illuminate\Support\Facades\Auth;

$client = Client::where('email', Auth::user()->email)->first();
?>

<style>
    .rating {
    display: flex;
    justify-content: center;
    align-items: center;
    }

    .emoji{
        transform: scale(2);
        padding: auto;
        margin: auto;
    }
    .emoji.active {
    transform: scale(2.4); /* agrandit l'emoji */
    opacity: 0.8; /* rend l'emoji légèrement transparent */
    }


</style>

<div class="container">
    <div class="row justify-content-center">
    <div class="text text-center" style="font-size: Large;" > ! Mes Reservations. </div> 
        <div class="col-md-14">
            @foreach($reservations as $reservation)
            @if($reservation->client_id == $client->id)
            <div class="row align-items-center">
                @if($reservation->etat == "C")
                <div class="card mb-3">
                        <div class="card-header" style="background-color: rgba(1, 4, 136, 0.9);color:white;">Reservation en Cours</div>
                        <div class="card-body">
                            <h5 class="card-title"> Depart:  {{ $reservation->adresse_depart }}</h5>
                            <h5 class="card-title"> Arrivée: {{ $reservation->adresse_arrivee }}</h5>
							<h6 class="card-subtitle mb-2 text-muted">Duree estimée: {{ $reservation->dure }} minutes</h6>
							<h6 class="card-subtitle mb-2 text-muted">Trajet: {{ $reservation->distance }} Km</h6>
							<h6 class="card-subtitle mb-2 text-muted">Prix: {{ $reservation->prix }} </h6>
                        </div>
                </div>    
                @endif
                @if($reservation->etat == "A")
                <div class="card mb-3">
                        <div class="card-header" style="background-color:#1acc8d;color:white;">Reservation en Attente</div>
                        <div class="card-body">
                            <h5 class="card-title"> Depart:  {{ $reservation->adresse_depart }}</h5>
                            <h5 class="card-title"> Arrivée: {{ $reservation->adresse_arrivee }}</h5>
							<h6 class="card-subtitle mb-2 text-muted">Duree estimée: {{ $reservation->dure }} minutes</h6>
							<h6 class="card-subtitle mb-2 text-muted">Trajet: {{ $reservation->distance }} Km</h6>
							<h6 class="card-subtitle mb-2 text-muted">Prix: {{ $reservation->prix }} </h6>
                        </div>
                        <div class="d-flex gap-2 mb-3">
								<a href="{{ route('reservations.destroy', [$reservation->id]) }}" class="btn btn-outline-danger">Annuler</a>
						</div>
                </div>    
                @endif
                @if($reservation->etat == "T")
                <div class="card mb-3">
                        <div class="card-header">Reservation en Terminée</div>
                        <div class="card-body">
                            <h5 class="card-title"> Depart:  {{ $reservation->adresse_depart }}</h5>
                            <h5 class="card-title"> Arrivée: {{ $reservation->adresse_arrivee }}</h5>
							<h6 class="card-subtitle mb-2 text-muted">Duree estimée: {{ $reservation->dure }} minutes</h6>
							<h6 class="card-subtitle mb-2 text-muted">Trajet: {{ $reservation->distance }} Km</h6>
							<h6 class="card-subtitle mb-2 text-muted">Prix: {{ $reservation->prix }} </h6>
                        </div>
                        <div class="d-flex gap-2 mb-3">
                        @if ($reservation->evaluation)
                            <button class="btn btn-success" disabled>Deja Évalué</button>
                        @else
                            <button class="btn btn-warning" data-toggle="modal" data-target="#evaluer-modal">Évaluer</button>
                        @endif
						</div>
                 
                
                <div class="modal fade" id="evaluer-modal" tabindex="-1" role="dialog" aria-labelledby="evaluer-modal-label" aria-hidden="true">
                    
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="evaluer-modal-label">Donnez votre avis</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="evaluer-form" action="{{ route('evaluations.store') }}" method="post">
                        @csrf
                    <div class="modal-body">
                        <div class="form-group">
                        <label for="rating">Notez votre expérience avec notre service :</label>
                        <div class="rating mt-2 mb-2">
                            <span class="emoji" data-rating="1">😞</span>
                            <span class="emoji" data-rating="2">😐</span>
                            <span class="emoji" data-rating="3">😊</span>
                            <span class="emoji" data-rating="4">😃</span>
                            <span class="emoji" data-rating="5">😍</span>
                            <input type="hidden"  name="rating" required  id="rating" value="0">
                        </div>
                        <input hidden name="res_id" value="{{$reservation->id}}">
                        </div>
                        <div class="form-group">
                        <label for="avis">Commentaire :</label>
                        <textarea class="form-control" name="comment" required id="avis" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary ml-3" data-dismiss="modal">Annuler</button>
                        <button type="submit" id="evaluer-btn" class="btn btn-primary" >Envoyer</button>
                    </div>
                </form>
                </div>
            </div>
                </div>
                </div>
                @endif
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>

<!-- Code HTML pour la fenêtre modale -->

@section('scripts')
<script>
    $(document).ready(function() {
        $('.emoji').on('click', function() {
        $('.emoji').removeClass('active');
        $(this).addClass('active');
        $('#rating').val($(this).data('rating'));
        
        //console.log("Emoji cliqué !");
        console.log($('#rating').val());
        });
    });

</script>
@endsection
@endsection