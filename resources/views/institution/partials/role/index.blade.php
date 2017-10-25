@extends('institution.dashboard.index')

@section('breadcrum')
<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="{{route('institution.dashboard')}}">Inicio</a></li>
		  <li class="breadcrumb-item active">Role</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
	
	<div class="row">
		<div class="col-md-12">
			<div class="clearfix">
				<h4 class="float-left">Roles</h4>
				<a href="{{route('role.create')}}" class="float-right btn btn-sm btn-primary">Nuevo rol</a>
			</div>
			<hr>	
			<div class="card">
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th>Rol</th>
								<th>Acción</th>
						</thead>
						</tr>
							<tbody>
							@foreach($roles as $role)
							<tr>
								<td>{!! $role->name !!}</td>
								<td>
									<a href="{{route('role.edit', $role)}}" class="btn btn-outline-primary btn-sm" title="Editar Rol">
										<i class="fa fa-edit"></i>
									</a>
									<a href="{{route('role.destroy', $role)}}" class="btn btn-outline-danger btn-sm" title="Eliminar Rol">
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