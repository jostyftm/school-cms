@extends('institution.dashboard.index')

@section('content')
	
	<div class="row">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header clearfix">
					<h4 class="float-left">Sedes</h4>
					<a href="{{route('headquarter.create')}}" class="btn btn-sm btn-primary float-right">Nueva sede</a>
				</div>
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