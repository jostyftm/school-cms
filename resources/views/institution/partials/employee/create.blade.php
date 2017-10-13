@extends('institution.dashboard.index')

@section('content')
	
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header clearfix">
					<h4 class="float-left">Funcionarios</h4>
				</div>
				<div class="card-body">
					{!! Form::open(['route' => 'headquarter.create', 'method' => 'post', 'files'=>true]) !!}
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
					  						{!! Form::select('identification_type_id', [], null, ['class'=>'form-control', 'placeholder'=>'Tipo de documento']) !!}
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
					  						{!! Form::select('id_city_expedition', [], null, ['class'=>'form-control', 'placeholder'=>'Seleccione una ciudad']) !!}
					  					</div>
					  				</div>
					  				<div class="col-md-3">
					  					<div class="form-group">
					  						{!! Form::label('gender_id', 'Genero')!!}
					  						{!! Form::select('gender_id', [], null, ['class'=>'form-control', 'placeholder'=>'Seleccione un genero']) !!}
					  					</div>
					  				</div>
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
					  						{!! Form::select('role_id', [], null, ['class'=>'form-control', 'placeholder'=>'Seleccione un genero']) !!}
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
				  							{!! Form::select('id_city_address', [], old('id_city_address'), ['class'=>'form-control chosen-select', 'placeholder'=>'seleccione una ciudad']) !!}
				  						</div>
				  					</div>
				  					<div class="col-md-4">
				  						<div class="form-group {{ $errors->has('zone_id') ? ' has-error' : '' }}">
				  							{!! Form::label('zone_id', 'Zona') !!}
				  							{!! Form::select('zone_id', [], old('zone_id'), ['class'=>'form-control chosen-select', 'placeholder'=>'seleccione una zona']) !!}
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
											<label class="custom-file">
											  <input type="file" id="file2" class="custom-file-input">
											  <span class="custom-file-control"></span>
											</label>
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