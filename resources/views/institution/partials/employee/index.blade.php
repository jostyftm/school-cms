@extends('institution.dashboard.index')

@section('breadcrum')
<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="{{route('institution.dashboard')}}">Inicio</a></li>
		  <li class="breadcrumb-item active">Funcionario</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
	
	<div class="row">
		<div class="col-md-12">
			<div class="clearfix">
				<h4 class="float-left">Funcionarios</h4>
				<a href="{{route('employee.create')}}" class="float-right btn btn-sm btn-primary">Nuevo funcionario</a>
			</div>
			<hr>
			<div class="card">
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Apellidos</th>
								<th>Tipo de documento</th>
								<th>N° documento</th>
								<th>Email</th>
								<th>Telefono</th>
								<th>Acción</th>
							</tr>
						</thead>
						<tbody>
							@foreach($employees as $employee)
							<tr>
								<td>{{ $employee->name }}</td>
								<td>{{ $employee->last_name }}</td>
								<td>{{ $employee->identification->identification_type->name }}</td>
								<td>{{ $employee->identification->identification_number }}</td>
								<td>{{ $employee->address->email }}</td>
								<td>{{ $employee->address->phone }}</td>
								<td>
									<a href="{{route('employee.edit', $employee)}}" class="btn btn-outline-primary btn-sm" title="Editar Funcionario">
										<i class="fa fa-edit"></i>
									</a>
									<a href="{{route('employee.destroy', $employee)}}" class="btn btn-outline-danger btn-sm" title="Eliminar Funcionario">
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