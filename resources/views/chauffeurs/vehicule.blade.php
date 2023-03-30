@extends('layouts.app')

@section('content')
<style>
	.icone img{
		width: 50%;
		max-width: 400px;
		margin:auto;
	}
</style>

<div class="row justify-content-center mb-4 " style="width: 100%;">
				@foreach ($vehicules as $vehicule)
                	@if($chauffeur->vehicule_id == $vehicule->id)
					<div class="col-lg-7 col-md-10 mb-3">
						<div class="card" style="width: 100%;">
						<div class="icone">
						<img id="icone" src="https://img.freepik.com/free-vector/front-car-concept-illustration_114360-7978.jpg?w=740&t=st=1680140867~exp=1680141467~hmac=b9fe395fda05a381cf5a8c41f7b52a38ed5d2993b4cea35afe219182f67f9650" class="card-img-top" alt="card-img-top">
						</div>
						<div class="card-body">
							<h5 class="card-title">Marque:  {{ $vehicule->marque }}</h5>
							<h6 class="card-subtitle mb-2 text-muted">Couleur: {{ $vehicule->couleur }} </h6>
							<h6 class="card-subtitle mb-2 text-muted">Places: {{ $vehicule->places }} </h6>
							<div class="d-flex gap-2">
								<a href="{{ route('vehicules.edit', [$vehicule->id]) }}" class="btn btn-outline-warning">Modifier</a>
							</div>
						</div>
						</div>
					</div>
					@endif
				@endforeach
		
</div>

@stop