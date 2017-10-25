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
			<h4>Crear rol</h4>
			<hr>
		</div>
		<div class="col-md-5">
			<div class="card">
				<div class="card-body">
					{!! Form::open(['route' => 'role.store', 'method' => 'post']) !!}
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
									{!!Form::submit('Crear', ['class'=>'btn btn-block btn-primary']);!!}
								</div>
							</div>
						</div>
					{!! Form::close()!!}
				</div>
			</div>
		</div>
	</div>

@endsection