@extends('institution.dashboard.index')

@section('breadcrum')
<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="{{route('institution.dashboard')}}">Inicio</a></li>
		  <li class="breadcrumb-item"><a href="{{route('file.index')}}">Archivos</a></li>
		  <li class="breadcrumb-item active">Crear</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
	
	<div class="row">
		<div class="col-md-8">
			<h4>Crear archivo</h4>
			<hr>
			<div class="card">
				<div class="card-body">
					{!! Form::open(['route' => 'file.create', 'method' => 'post', 'files'=>true]) !!}
						{{-- PERSONAL IDENTIFICATION --}}
				  			<div class="section_inscription">
					  			<div class="row">
					  				<div class="col-md-6">
					  					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					  						{!! Form::label('name', 'Titulo') !!}
					  						{!! Form::text('name', null, ['class'=>'form-control']) !!}
					  					</div>
					  				</div>
					  				<div class="col-md-6">
					  					<div class="form-group">
					  						{!! Form::label('document_type_id', 'Tipo de archivo') !!}
					  						{!! Form::select('document_type_id', [], null, ['class'=>'form-control']) !!}
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
					  		{{-- FILE  --}}
				  			<div class="picture">
				  				<div class="section_inscription__tittle">
				  					<h6>Archivo</h6>
				  					<hr>
				  				</div>
				  				<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="custom-file">
											  <input type="file" id="file2" class="custom-file-input">
											  <span class="custom-file-control">Cargar archivo</span>
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