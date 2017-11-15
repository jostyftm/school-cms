@extends('layouts.index')


@section('content')
	<div class="col-md-12 mt-5">
		<h2>Sedes</h2>
		<hr>
		<table class="table">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Direccion</th>
					<th>Telefono</th>
					<th>Email</th>
					<th>Ver</th>
				</tr>
			</thead>
			<tbody>
				@foreach($headquarters as $headquarter)
				<tr>
					<td>{{$headquarter->name}}</td>
					<td>{{$headquarter->address->address}}</td>
					<td>{{$headquarter->address->phone}}</td>
					<td>{{$headquarter->address->email}}</td>
					<td>
						<a href="{{route('headquarter.show', $headquarter)}}" class="btn btn-outline-secondary btn-sm">
							<i class="fa fa-eye"></i>
						</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection