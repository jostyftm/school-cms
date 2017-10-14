@extends('institution.dashboard.index')

@section('breadcrum')
<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="{{route('institution.dashboard')}}">Inicio</a></li>
		  <li class="breadcrumb-item active">Página</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="clearfix">
				<h4 class="float-left">Página</h4>
				<a href="{{route('page.create')}}" class="float-right btn btn-sm btn-primary">Nueva Página</a>
			</div>
			<hr>
			<div class="card">
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th>Titulo</th>
								<th>Estado</th>
								<th>Fecha de creación</th>
								<th>Accion</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>	
	</div>
@endsection