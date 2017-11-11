@extends('institution.dashboard.index')

@section('breadcrum')
<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="{{route('institution.dashboard')}}">Inicio</a></li>
		  <li class="breadcrumb-item active">Contratos</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
	
	<div class="row">
		<div class="col-md-12">
			<div class="clearfix">
				<h4 class="float-left">Contratos</h4>
				<a href="{{route('contract.create')}}" class="float-right btn btn-sm btn-primary">Nuevo contrato</a>
			</div>
			<hr>	
			<div class="card">
				<div class="card-body">
					<table class="table table-responsive">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>slug</th>
								<th>Fecha de creación</th>
								<th>Acción</th>
							</tr>
						</thead>
						<tbody>
							@foreach($contracts as $contract)
							<tr>
								<td>{{ $contract->name}}</td>
								<td>{{ $contract->slug}}</td>
								<td>{{ $contract->created_at->diffForHumans()}}</td>
								<td>
									<a href="{{route('contract.edit', $contract)}}" class="btn btn-outline-primary btn-sm" title="Editar Categoria">
										<i class="fa fa-edit"></i>
									</a>
									<a href="{{route('contract.destroy', $contract)}}" class="btn btn-outline-danger btn-sm" title="Eliminar Categoria">
										<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{{$contracts->render("pagination::bootstrap-4")}}
				</div>
			</div>
		</div>
	</div>
@endsection