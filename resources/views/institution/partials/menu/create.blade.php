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
		<div class="col-md-8">
			<h4>Crear menu</h4>
			<hr>
			<div class="card">
				<div class="card-body">
					{!! Form::open(['route' => 'menu.store', 'method' => 'post']) !!}
						{{-- PERSONAL IDENTIFICATION --}}
				  			<div id="identification" class="section_inscription">
					  			<div class="row">
					  				<div class="col-md-12">
					  					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					  						{!! Form::label('name', 'Nombre del menu') !!}
					  						{!! Form::text('name', null, ['class'=>'form-control']) !!}
					  					</div>
					  				</div>
					  			</div>
					  		</div>
				  			{{-- BUTTON --}}
			  				<div class="row">
			  					<div class="col-md-12">
			  						<div class="form-group text-center">
			  							<button class="btn btn-block btn-primary">Crear</button>
			  						</div>
			  					</div>
			  				</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection