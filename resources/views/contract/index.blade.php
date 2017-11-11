@extends('layouts.index')


@section('content')
	<div class="col-md-12 mt-5">
		<h2>Conotratos</h2>
		<hr>
		<table class="table">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Descripción</th>
					<th>Fecha</th>
					<th>Acción</th>
				</tr>
			</thead>
			<tbody>
				@foreach($contracts as $contract)
				<tr>
					<td>{!! $contract->name !!}</td>
					<td>{!! substr($contract->description, 0, 60) !!}</td>
					<td>{!! $contract->created_at->diffForHumans() !!}</td>
					<td>
						<a href="{{route('show.contract', $contract->slug)}}" class="btn btn-outline-secondary btn-sm">
							<i class="fa fa-eye"></i>
						</a>
						<a href="{{$contract->file}}" class="btn btn-outline-primary btn-sm" target="_blank">
							<i class="fa fa-download"></i>
						</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection