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
		  <li class="breadcrumb-item active">Crear</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
	@include('complements.errors')
	<div class="row">
		<div class="col-md-12">
			<div>
				<h4>Nuevo Contrato</h4>
			</div>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					{!! Form::open(['route' => 'contract.store', 'method' => 'post', 'files'=>true]) !!}
						{{-- --}}
				  			<div class="section_inscription">
					  			<div class="row">
					  				<div class="col-md-9">
					  					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					  						{!! Form::label('name', 'Titulo') !!}
					  						{!! Form::text('name', null, ['class'=>'form-control']) !!}
					  					</div>
					  				</div>
					  				<div class="col-md-3">
					  					<div class="form-group{{ $errors->has('created_at') ? ' has-error' : '' }}">
					  						{!! Form::label('created_at', 'Fecha de creacion', []) !!}
					  						{!! Form::text('created_at', null, ['class' => 'form-control datepicker']) !!}
					  					</div>
					  				</div>
					  			</div>
					  			<div class="row">
					  				<div class="col-md-12">
					  					<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
					  						{!! Form::label('description', 'Descripción') !!}
					  						{!! Form::textarea('description', null, ['class'=>'form-control']) !!}
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
											       <i class="fa fa-file-pdf-o"></i> Escoger
											     </a>
											   </span>
											   <input id="thumbnail" class="form-control" type="text" name="file">
											 </div>
											 <img id="holder" style="margin-top:15px;max-height:100px;">
										</div>
								 	</div>
								</div>
					  		</div>
				  			{{-- BUTTIN --}}
			  				<div class="row">
			  					<div class="col-md-12">
			  						<div class="form-group">
			  							<button class="btn btn-primary">Crear</button>
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