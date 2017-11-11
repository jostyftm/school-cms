@extends('institution.dashboard.index')

@section('breadcrum')
<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="{{route('institution.dashboard')}}">Inicio</a></li>
		  <li class="breadcrumb-item active">Sede</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
	
	<div class="row">
		<div class="col-md-12">
			<div class="clearfix">
				<h4 class="float-left">Sedes</h4>
				<a href="{{route('headquarter.create')}}" class="float-right btn btn-sm btn-primary">Nueva sede</a>
			</div>
			<hr>
			<div class="card">
				<div class="card-body">
					<table class="table table-responsive">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>nit</th>
								<th>Dirección</th>
								<th>Phone</th>
								<th>Acción</th>
							</tr>
						</thead>
						<tbody>
							@foreach($headquarters as $headquarter)
							<tr>
								<td>{!! $headquarter->name !!}</td>
								<td>{!! $headquarter->nit !!}</td>
								<td>{!! $headquarter->address->address !!}</td>
								<td>{!! $headquarter->address->phone !!}</td>
								<td>
									{{-- <a href="" class="btn btn-outline-secondary btn-sm" title="Ver Sede">
										<i class="fa fa-eye"></i>
									</a> --}}
									<a href="{{route('headquarter.edit', $headquarter)}}" class="btn btn-outline-primary btn-sm" title="Editar Sede">
										<i class="fa fa-edit"></i>
									</a>
									<a href="{{route('headquarter.destroy', $headquarter)}}" class="btn btn-outline-danger btn-sm" title="Eliminar Sede">
										<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>	
	</div>

@endsection