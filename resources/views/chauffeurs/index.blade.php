@extends('layouts.app')

@section('content')

<div class="text text-center" style="font-size: Large;" > Liste des Chaufeurs. </div> 

	<table class="table table-success table-stripped" style="border:4px solid white">
		<thead>
			<tr>
				<th>id</th>
				<th>nom</th>
				<th>prenom</th>
				<th>adresse</th>
				<th>email</th>
				<th>tel</th>
				<th>date_naissance</th>
				<th>num_permis</th>
				<th>etat</th>
			</tr>
		</thead>
		<tbody>
			@foreach($chauffeurs as $chauffeur)

				<tr>
					<td>{{ $chauffeur->id }}</td>
					<td>{{ $chauffeur->nom }}</td>
					<td>{{ $chauffeur->prenom }}</td>
					<td>{{ $chauffeur->adresse }}</td>
					<td>{{ $chauffeur->email }}</td>
					<td>{{ $chauffeur->tel }}</td>
					<td>{{ $chauffeur->date_naissance }}</td>
					<td>{{ $chauffeur->num_permis }}</td>
					<td>{{ $chauffeur->etat }}</td>

					
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
