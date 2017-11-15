@extends('institution.dashboard.index')

@section('breadcrum')
<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="{{route('institution.dashboard')}}">Inicio</a></li>
		  <li class="breadcrumb-item active">Menu</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
	
	<div class="row">
		<div class="col-md-12">
			<div class="clearfix">
				<h4 class="float-left">Menus</h4>
				<a href="{{route('menu.create')}}" class="float-right btn btn-sm btn-primary">Nuevo menu</a>
			</div>
			<hr>
			<div class="alert alert-info alert-dismissible fade show" role="alert">
				Para crear el menu principal debe de llamarlo <strong>main</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    	<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="card">
				<div class="card-body">
					<table class="table table-responsive">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Acción</th>
							</tr>
						</thead>
						<tbody>
							@foreach($menus as $menu)
							<tr>
								<td>{!! $menu->name !!}</td>
								<td>
									<a href="{{route('menu.build', $menu)}}" class="btn btn-outline-secondary btn-sm" title="Construir Sede">
										<i class="fa fa-wrench"></i>
									</a>
									<a href="{{route('menu.edit', $menu)}}" class="btn btn-outline-primary btn-sm" title="Editar Sede">
										<i class="fa fa-edit"></i>
									</a>
									<a href="{{route('menu.destroy', $menu)}}" class="btn btn-outline-danger btn-sm" title="Eliminar Sede">
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