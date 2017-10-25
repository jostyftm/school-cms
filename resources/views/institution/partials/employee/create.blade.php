@extends('institution.dashboard.index')

@section('css')
	<link rel="stylesheet" href="{{asset('css/bootstrap-chosen.css')}}">
@endsection

@section('breadcrum')
<div class="row">
	<div class="col-md-8">
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="{{route('institution.dashboard')}}">Inicio</a></li>
		  <li class="breadcrumb-item"><a href="{{route('employee.index')}}">Funcionario</a></li>
		  <li class="breadcrumb-item active">Crear</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
	
	<div class="row">
		<div class="col-md-12">
			<h4>Crear funcinario</h4>
			<hr>
			<div class="card">
				<div class="card-body">
					{!! Form::open(['route' => 'employee.store', 'method' => 'post', 'files'=>true]) !!}
						{{-- PERSONAL IDENTIFICATION --}}
				  			<div id="identification" class="section_inscription">
				  				<div class="section_inscription__tittle">
				  					<h6>Informacion básica</h6>
				  					<hr>
				  				</div>
					  			<div class="row">
					  				<div class="col-md-6">
					  					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					  						{!! Form::label('name', 'Nombre') !!}
					  						{!! Form::text('name', null, ['class'=>'form-control']) !!}
					  					</div>
					  				</div>
					  				<div class="col-md-6">
					  					<div class="form-group">
					  						{!! Form::label('last_name', 'Apellido') !!}
					  						{!! Form::text('last_name', null, ['class'=>'form-control']) !!}
					  					</div>
					  				</div>
					  			</div>
					  			<div class="row">
					  				<div class="col-md-3">
					  					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					  						{!! Form::label('identification_type_id', 'Tipo de documento') !!}
					  						{!! Form::select('identification_type_id', $identifications, null, ['class'=>'chosen-select form-control', 'placeholder'=>'Tipo de documento']) !!}
					  					</div>
					  				</div>
					  				<div class="col-md-3">
					  					<div class="form-group">
					  						{!! Form::label('identification_number', 'Número de identificación') !!}
					  						{!! Form::text('identification_number', null, ['class'=>'form-control']) !!}
					  					</div>
					  				</div>
					  				<div class="col-md-3">
					  					<div class="form-group">
					  						{!! Form::label('id_city_expedition', 'Ciudad de expedición') !!}
					  						{!! Form::select('id_city_expedition', $cities, null, ['class'=>'chosen-select form-control', 'placeholder'=>'Seleccione una ciudad']) !!}
					  					</div>
					  				</div>
					  				{{-- <div class="col-md-3">
					  					<div class="form-group">
					  						{!! Form::label('gender_id', 'Genero')!!}
					  						{!! Form::select('gender_id', $genders, null, ['class'=>'chosen-select form-control', 'placeholder'=>'Seleccione un genero']) !!}
					  					</div>
					  				</div> --}}
					  			</div>
					  		</div>
					  		{{-- WORK --}}
					  		<div id="work" class="section_inscription">
					  			<div class="section_inscription__tittle">
				  					<h6>Trabajo</h6>
				  					<hr>
				  				</div>
				  				<div class="row">
				  					<div class="col-md-3">
				  						<div class="form-group">
				  							{!! Form::label('role_id', 'Cargo')!!}
					  						{!! Form::select('role_id', $roles, null, ['class'=>'chosen-select form-control', 'placeholder'=>'Seleccione un genero']) !!}
				  						</div>
				  					</div>
				  				</div>
					  		</div>
					  		{{-- ADDRESS --}}
				  			<div id="identification" class="section_inscription">
				  				<div class="section_inscription__tittle">
				  					<h6>Dirección Residencia</h6>
				  					<hr>
				  				</div>
				  				<div class="row">
				  					<div class="col-md-3">
				  						<div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
				  							{!! Form::label('address', 'Dirección') !!}
				  							{!! Form::text('address', old('address'), ['class' => 'form-control', 'id'=>'adress']) !!}
				  						</div>
				  					</div>
				  					<div class="col-md-3">
				  						<div class="form-group {{ $errors->has('neighborhood') ? ' has-error' : '' }}">
				  							{!! Form::label('neighborhood', 'Barrio') !!}
				  							{!! Form::text('neighborhood', old('neighborhood'), ['class' => 'form-control', 'id'=>'neighborhood']) !!}
				  						</div>
				  					</div>
				  					<div class="col-md-3">
				  						<div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
				  							{!! Form::label('phone', 'Telefono') !!}
				  							{!! Form::text('phone', old('phone'), ['class' => 'form-control', 'id'=>'phone']) !!}
				  						</div>
				  					</div>
				  					<div class="col-md-3">
				  						<div class="form-group {{ $errors->has('mobil') ? ' has-error' : '' }}">
				  							{!! Form::label('mobil', 'Celular') !!}
				  							{!! Form::text('mobil', old('mobil'), ['class' => 'form-control', 'id'=>'mobil']) !!}
				  						</div>
				  					</div>
				  				</div>
				  				<div class="row">
				  					<div class="col-md-4">
				  						<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
				  							{!! Form::label('email', 'Email') !!}
				  							{!! Form::text('email', old('email'), ['class' => 'form-control', 'id'=>'email']) !!}
				  						</div>
				  					</div>
				  					<div class="col-md-4">
				  						<div class="form-group {{ $errors->has('id_city_address') ? ' has-error' : '' }}">
				  							{!! Form::label('id_city_address', 'Ciudad') !!}
				  							{!! Form::select('id_city_address', $cities, old('id_city_address'), ['class'=>'form-control chosen-select', 'placeholder'=>'seleccione una ciudad']) !!}
				  						</div>
				  					</div>
				  				</div>
				  			</div>
				  			{{-- PICTURE  --}}
				  			<div class="picture">
				  				<div class="section_inscription__tittle">
				  					<h5>Foto</h5>
				  					<hr>
				  				</div>
				  				<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<div class="input-group">
											   <span class="input-group-btn">
											     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-secondary">
											       <i class="fa fa-picture-o"></i> Choose
											     </a>
											   </span>
											   <input id="thumbnail" class="form-control" type="text" name="avatar">
											 </div>
											 <img id="holder" style="margin-top:15px;max-height:100px;">
										</div>
									</div>
								</div>
				  			</div>
				  			{{-- BUTTIN --}}
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

@section('js')
	<script src="{{asset('js/chosen.jquery.js')}}"></script>
	<script src="/vendor/laravel-filemanager/js/lfm.js"></script>

	<script>
		$(function() {
			
			$('#lfm').filemanager('image');	

	        $('.chosen-select').chosen({width: "100%"});
	        $('.chosen-select-deselect').chosen({ allow_single_deselect: true });
	        $('.datepicker').datepicker({
			    format: 'yyyy/mm/dd',
			    startDate: '-3d'
			});
    	});
	</script>
@endsection