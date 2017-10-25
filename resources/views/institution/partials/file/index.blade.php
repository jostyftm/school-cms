@extends('institution.dashboard.index')

@section('breadcrum')
<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="{{route('institution.dashboard')}}">Inicio</a></li>
		  <li class="breadcrumb-item active">Archivos</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
<iframe src="/laravel-filemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
	{{-- <div class="row">
		<div class="col-md-12">
			<div class="clearfix">
				<h4 class="float-left">Archivos</h4>
				<a href="{{route('file.create')}}" class="float-right btn btn-sm btn-primary">Nueva archivo</a>
			</div>
			<hr>
			<div class="card">
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th>ID</th>
								<th>Titutlo</th>
								<th>Descripción</th>
								<th>Fecha de creación</th>
								<th>Ultima actualización</th>
								<th>Accion</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>	
	</div> --}}
@endsection