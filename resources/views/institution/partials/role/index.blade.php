@extends('institution.dashboard.index')

@section('content')
	
	<div class="row">
		<div class="col-md-7">
			<div class="card">
				<div class="card-header clearfix">
					<h4 class="float-left">Roles</h4>
					<a href="{{route('role.create')}}" class="btn btn-sm btn-primary float-right">Nueva rol</a>
				</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th>ID</th>
								<th>Rol</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-5">
			<div class="card">
				<div class="card-header">
					
				</div>
				<div class="card-body">
					{!! Form::open(['route' => 'role.create', 'method' => 'post']) !!}
						<div class="row">
							<div class="col-md-12">
								<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
		  							{!! Form::label('name', 'Nombre') !!}
		  							{!! Form::text('name', old('name'), ['class' => 'form-control', 'id'=>'name']) !!}
				  				</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form group">
									{!!Form::submit('Crear rol', ['class'=>'btn btn-block btn-primary']);!!}
								</div>
							</div>
						</div>
					{!! Form::close()!!}
				</div>
			</div>
		</div>
	</div>

@endsection