@extends('institution.dashboard.index')

@section('css')
	<link rel="stylesheet" href="{{asset('css/bootstrap-chosen.css')}}">
@endsection

@section('breadcrum')
<div class="row">
	<div class="col-md-8">
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="{{route('institution.dashboard')}}">Inicio</a></li>
		  <li class="breadcrumb-item"><a href="{{route('headquarter.index')}}">Sedes</a></li>
		  <li class="breadcrumb-item active">Editar</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
	
	<div class="row">
		<div class="col-md-8">
			<h4>Editar sede</h4>
			<hr>
			<div class="card">
				<div class="card-body">
					{!! Form::open(['route' => ['headquarter.update', $headquarter], 'method' => 'put', 'files'=>true]) !!}
						{{-- PERSONAL IDENTIFICATION --}}
				  			<div id="identification" class="section_inscription">
					  			<div class="row">
					  				<div class="col-md-6">
					  					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					  						{!! Form::label('name', 'Nombre de la sede') !!}
					  						{!! Form::text('name', $headquarter->name, ['class'=>'form-control']) !!}
					  					</div>
					  				</div>
					  				<div class="col-md-6">
					  					<div class="form-group">
					  						{!! Form::label('nit', 'NIT') !!}
					  						{!! Form::text('nit', $headquarter->nit, ['class'=>'form-control']) !!}
					  					</div>
					  				</div>
					  			</div>
					  		</div>
					  		{{-- ADDRESS --}}
				  			<div id="identification" class="section_inscription">
				  				<div class="section_inscription__tittle">
				  					<h5>Dirección Residencia</h5>
				  					<hr>
				  				</div>
				  				<div class="row">
				  					<div class="col-md-3">
				  						<div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
				  							{!! Form::label('address', 'Dirección') !!}
				  							{!! Form::text('address', $headquarter->address->address, ['class' => 'form-control', 'id'=>'adress']) !!}
				  						</div>
				  					</div>
				  					<div class="col-md-3">
				  						<div class="form-group {{ $errors->has('neighborhood') ? ' has-error' : '' }}">
				  							{!! Form::label('neighborhood', 'Barrio') !!}
				  							{!! Form::text('neighborhood', $headquarter->address->neighborhood, ['class' => 'form-control', 'id'=>'neighborhood']) !!}
				  						</div>
				  					</div>
				  					<div class="col-md-3">
				  						<div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
				  							{!! Form::label('phone', 'Telefono') !!}
				  							{!! Form::text('phone', $headquarter->address->phone, ['class' => 'form-control', 'id'=>'phone']) !!}
				  						</div>
				  					</div>
				  					<div class="col-md-3">
				  						<div class="form-group {{ $errors->has('mobil') ? ' has-error' : '' }}">
				  							{!! Form::label('mobil', 'Celular') !!}
				  							{!! Form::text('mobil', $headquarter->address->mobil, ['class' => 'form-control', 'id'=>'mobil']) !!}
				  						</div>
				  					</div>
				  				</div>
				  				<div class="row">
				  					<div class="col-md-4">
				  						<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
				  							{!! Form::label('email', 'Email') !!}
				  							{!! Form::text('email', $headquarter->address->email, ['class' => 'form-control', 'id'=>'email']) !!}
				  						</div>
				  					</div>
				  					<div class="col-md-4">
				  						<div class="form-group {{ $errors->has('id_city_address') ? ' has-error' : '' }}">
				  							{!! Form::label('id_city_address', 'Ciudad') !!}
				  							{!! Form::select('id_city_address', $cities, $headquarter->address->id_city_address, ['class'=>'chosen-select form-control chosen-select', 'placeholder'=>'seleccione una ciudad']) !!}
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
											   <input id="thumbnail" class="form-control" type="text" name="avatar" value="{{$headquarter->avatar}}">
											 </div>
											 <img id="holder" src="{{$headquarter->avatar}}" style="margin-top:15px;max-height:100px;">
										</div>
									</div>
								</div>
				  			</div>
				  			{{-- BUTTIN --}}
			  				<div class="row">
			  					<div class="col-md-12">
			  						<div class="form-group text-center">
			  							<button class="btn btn-block btn-primary">Actualizar</button>
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