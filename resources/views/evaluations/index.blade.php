@extends('layouts.app')

@section('content')

<div class="text text-center" style="font-size: Large;" > Liste des Avis/ Clientele. </div> 

	<table class="table table-success table-stripped" style="border:4px solid white">
		<thead>
			<tr>
				<th>id</th>
				<th>reservation_id</th>
				<th>note</th>
				<th>commentaire</th>

			</tr>
		</thead>
		<tbody>
			@foreach($evaluations as $evaluation)

				<tr>
					<td>{{ $evaluation->id }}</td>
					<td>{{ $evaluation->reservation_id }}</td>
					<td>{{ $evaluation->note }}</td>
					<td>{{ $evaluation->commentaire }}</td>

				</tr>

			@endforeach
		</tbody>
	</table>

@stop
