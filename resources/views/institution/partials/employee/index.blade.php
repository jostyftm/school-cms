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
								<th>ID</th>
								<th>Nombre</th>
								<th>Apellidos</th>
								<th>Tipo de documento</th>
								<th>Número de documento</th>
								<th>Email</th>
								<th>Dirección</th>
								<th>Telefono</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>

@endsection