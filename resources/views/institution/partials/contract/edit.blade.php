@extends('institution.dashboard.index')

@section('css')
	<link rel="stylesheet" href="/plugin/datepicker/css/bootstrap-datepicker.css">
@endsection

@section('breadcrum')
<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="{{route('institution.dashboard')}}">Inicio</a></li>
		  <li class="breadcrumb-item"><a href="{{route('contract.index')}}">Contratos</a></li>
		  <li class="breadcrumb-item active">Editar</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div>
				<h4>Editar Contrato</h4>
			</div>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					{!! Form::open(['route' => ['contract.update', $contract], 'method' => 'put', 'files'=>true]) !!}
						{{-- --}}
				  			<div class="section_inscription">
					  			<div class="row">
					  				<div class="col-md-9">
					  					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					  						{!! Form::label('name', 'Titulo') !!}
					  						{!! Form::text('name', $contract->name, ['class'=>'form-control']) !!}
					  					</div>
					  				</div>
					  				<div class="col-md-3">
					  					<div class="form-group">
					  						{!! Form::label('created_at', 'Fecha de creacion', []) !!}
					  						{!! Form::text('created_at', $contract->created_at, ['class' => 'form-control datepicker']) !!}
					  					</div>
					  				</div>
					  			</div>
					  			<div class="row">
					  				<div class="col-md-12">
					  					<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
					  						{!! Form::label('description', 'Descripción') !!}
					  						{!! Form::textarea('description', $contract->description, ['class'=>'form-control']) !!}
					  					</div>
					  				</div>
					  			</div>
							    <div class="row">
								    <div class="col-md-12">
								    	<div class="form-group">
								    		<label for="">Archivo</label>
											<div class="input-group">
											   <span class="input-group-btn">
											     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-secondary">
											       <i class="fa fa-picture-o"></i> Escoger
											     </a>
											   </span>
											   <input id="thumbnail" class="form-control" type="text" name="file" value="{{$contract->file}}">
											 </div>
										</div>
										<div class="form-group">
											<embed src="{{$contract->file}}" type="application/pdf" width="800" height="300"></embed>
										</div>
								 	</div>
								</div>
					  		</div>
				  			{{-- BUTTIN --}}
			  				<div class="row">
			  					<div class="col-md-12">
			  						<div class="form-group">
			  							<button class="btn btn-primary">Actualizar</button>
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
	<script src="/plugin/datepicker/js/bootstrap-datepicker.js"></script>
	<script src="/plugin/datepicker/locales/bootstrap-datepicker.es.min.js"></script>
	<script src="{{asset('plugin/ckeditor/ckeditor.js')}}"></script>
	<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
	<script>
		$(document).ready(function() {
			
			$('#lfm').filemanager('file');		

			$('.datepicker').datepicker({
			    format: "yyyy-mm-dd",
			    language: "es"
			});  	

		  	var options = {
			    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
			    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
			    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
			    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
			    language: 'es',
			};

		  	CKEDITOR.replace( 'description', options);

		});
	</script>
@endsection