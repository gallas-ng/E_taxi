@extends('layouts.app')

@section('content')

<div class="text text-center" style="font-size: Large;" > Liste des Clients. </div> 

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
				<th>num_compte</th>

			</tr>
		</thead>
		<tbody>
			@foreach($clients as $client)

				<tr>
					<td>{{ $client->id }}</td>
					<td>{{ $client->nom }}</td>
					<td>{{ $client->prenom }}</td>
					<td>{{ $client->adresse }}</td>
					<td>{{ $client->email }}</td>
					<td>{{ $client->tel }}</td>
					<td>{{ $client->date_naissance }}</td>
					<td>{{ $client->num_compte }}</td>

					
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
