@extends('layouts.app')

@section('content')

<div class="text text-center" style="font-size: Large;" > Liste des Voitures. </div> 

	<table class="table table-success table-striped" style="border:4px solid white">
		<thead>
			<tr>
				<th>#ID</th>
				<th>Marque</th>
				<th>Couleur</th>
				<th>Nombre de places</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($vehicules as $vehicule)

				<tr>
					<td>{{ $vehicule->id }}</td>
					<td>{{ $vehicule->marque }}</td>
					<td>{{ $vehicule->couleur}}</td>
					<td>{{ $vehicule->places }}</td>
					<td>
							<div class="d-flex gap-2">
								<a href="{{ route('vehicules.edit', [$vehicule->id]) }}" class="btn btn-success">Edit</a>
							</div>
					</td>
				</tr>


			@endforeach
		</tbody>
	</table>

@stop
