@extends('institution.dashboard.index')

@section('content')
	
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header clearfix">
					<h4 class="float-left">Funcionarios</h4>
					<a href="{{route('employee.create')}}" class="btn btn-sm btn-primary float-right">Nueva funcionario</a>
				</div>
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