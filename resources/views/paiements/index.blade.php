@extends('layouts.app')

@section('content')

<div class="text text-center" style="font-size: Large;" > Liste des Transactions. </div> 

	<table class="table table-success table-striped" style="border:4px solid white">
		<thead>
			<tr>
				<th>#ID</th>
				<th>Reservation_id</th>
				<th>Montant paie</th>
				<th>Mode de paie</th>
			</tr>
		</thead>
		<tbody>
			@foreach($paiements as $paiement)

				<tr>
					<td>{{ $paiement->id }}</td>
					<td>{{ $paiement->reservation_id }}</td>
					<td>{{ $paiement->montant }}</td>
					<td>{{ $paiement->mode }}</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
