@extends('institution.dashboard.index')

@section('css')
	
@endsection

@section('breadcrum')
<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="{{route('institution.dashboard')}}">Inicio</a></li>
		  <li class="breadcrumb-item"><a href="{{route('page.index')}}">Páginas</a></li>
		  <li class="breadcrumb-item active">Crear</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div>
				<h4>Nueva Pagina</h4>
			</div>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-9">
			<div class="card">
				<div class="card-body">
					{!! Form::open(['route' => 'page.create', 'method' => 'post', 'files'=>true]) !!}
						{{-- --}}
				  			<div class="section_inscription">
					  			<div class="row">
					  				<div class="col-md-12">
					  					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					  						{!! Form::label('name', 'Titulo') !!}
					  						{!! Form::text('name', null, ['class'=>'form-control']) !!}
					  					</div>
					  				</div>
					  			</div>
					  			<div class="row">
					  				<div class="col-md-12">
					  					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					  						{!! Form::label('description', 'Descripción') !!}
					  						{!! Form::textarea('description', null, ['class'=>'form-control']) !!}
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
		<div class="col-md-3">
			<div class="card mb-3">
				<div class="card-header">Detalles de la página</div>
				<div class="card-body">
				    <div class="row">
				    	<div class="col-md-12">
				    		<div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
					  			{!! Form::label('slug', 'URL slug') !!}
					  			{!! Form::text('slug', null, ['class'=>'form-control']) !!}
					  		</div>
				    	</div>
				    </div>
				    <div class="row">
				    	<div class="col-md-12">
				    		<div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
					  			{!! Form::label('state', 'Estado') !!}
					  			{!! Form::select('state', [], null, ['class'=>'form-control']) !!}
					  		</div>
				    	</div>
				    </div>
				    <div class="row">
				    	<div class="col-md-12">
				    		<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					  			{!! Form::label('higher', 'superior') !!}
					  			{!! Form::select('higher', [], null, ['class'=>'form-control']) !!}
					  		</div>
				    	</div>
				    </div>
			  </div>
			</div>
			<div class="card mb-3">
				<div class="card-header">Imagen de la página</div>
				<div class="card-body">
					<div class="row">
					    <div class="col-md-12">
					    	<div class="form-group">
								<label class="custom-file">
								  <input type="file" id="file2" class="custom-file-input">
								  <span class="custom-file-control">Cargar</span>
								</label>
							</div>
					 	</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
@endsection

@section('js')
	<script src="{{asset('plugin/ckeditor/ckeditor.js')}}"></script>
	<script>
		$(document).ready(function() {
		  	
		  	CKEDITOR.replace( 'description', {
			    language: 'es',
			});

		});
	</script>
@endsection