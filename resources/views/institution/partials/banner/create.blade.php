@extends('institution.dashboard.index')

@section('breadcrum')
<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="{{route('institution.dashboard')}}">Inicio</a></li>
		  <li class="breadcrumb-item"><a href="{{route('banner.index')}}">Banner</a></li>
		  <li class="breadcrumb-item active">Crear</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
	@include('complements.errors')
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				{!! Form::open(['route' => 'banner.store', 'method' => 'post']) !!}
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
				  					<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
				  						{!! Form::label('description', 'Descripción') !!}
				  						{!! Form::textarea('description', null, ['class'=>'form-control']) !!}
				  					</div>
				  				</div>
				  			</div>
						    <div class="row">
							    <div class="col-md-12">
							    	<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
							    		<label for="">Imagen</label>
										<div class="input-group">
										   <span class="input-group-btn">
										     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-secondary">
										       <i class="fa fa-picture-o"></i> Escoger
										     </a>
										   </span>
										   <input id="thumbnail" class="form-control" type="text" name="image">
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
@endsection

@section('js')
	<script src="{{asset('plugin/ckeditor/ckeditor.js')}}"></script>
	<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
	<script>
		$(document).ready(function() {
			
			$('#lfm').filemanager('image');		  	

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