@extends('institution.dashboard.index')

@section('breadcrum')
<div class="row">
	<div class="col-md-10">
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="{{route('institution.dashboard')}}">Inicio</a></li>
		  <li class="breadcrumb-item active">Sede</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
	
	<div class="row">
		<div class="col-md-10">
			<div class="clearfix">
				<h4 class="float-left">Sedes</h4>
				<a href="{{route('headquarter.create')}}" class="float-right btn btn-sm btn-primary">Nueva sede</a>
			</div>
			<hr>
			<div class="card">
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nombre</th>
								<th>nit</th>
								<th>Dirección</th>
								<th>Phone</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>	
	</div>

@endsection