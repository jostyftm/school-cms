@extends('institution.dashboard.index')

@section('css')
	
@endsection

@section('breadcrum')
<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="{{route('institution.dashboard')}}">Inicio</a></li>
		  <li class="breadcrumb-item"><a href="{{route('post.index')}}">Entradas</a></li>
		  <li class="breadcrumb-item active">Crear</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div>
				<h4>Editar entrada</h4>
			</div>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					{!! Form::open(['route' => ['post.update', $post], 'method' => 'put', 'files'=>true]) !!}
					{{ csrf_field() }}
						{{-- --}}
			  			<div class="section_inscription">
				  			<div class="row">
				  				<div class="col-md-12">
				  					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
				  						{!! Form::label('title', 'Titulo') !!}
				  						{!! Form::text('title', $post->title, ['class'=>'form-control']) !!}
				  					</div>
				  				</div>
				  			</div>
				  			<div class="row">
				  				<div class="col-md-12">
				  					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
				  						{!! Form::label('body', 'Descripción') !!}
				  						{!! Form::textarea('body', $post->body, ['class'=>'form-control']) !!}
				  					</div>
				  				</div>
				  			</div>
						    <div class="row">
						    	<div class="col-md-6">
						    		<div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
							  			{!! Form::label('state', 'Estado') !!}
							  			{!! Form::select('state', 
							  				[
							  					'active' => 'Activo',
							  					'inactive'=> 'Inactivo'
							  				], $post->state, ['class'=>'form-control']) !!}
							  		</div>
						    	</div>
						    	<div class="col-md-6">
						    		<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							  			{!! Form::label('category_id', 'Categoria') !!}
							  			{!! Form::select('category_id', $categories, $post->category_id, ['class'=>'form-control']) !!}
							  		</div>
						    	</div>
						    </div>
						    <div class="row">
							    <div class="col-md-12">
							    	<div class="form-group">
							    		<label for="">Imagen de la entrada</label>
										<div class="input-group">
										   <span class="input-group-btn">
										     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-secondary">
										       <i class="fa fa-picture-o"></i> Choose
										     </a>
										   </span>
										   <input id="thumbnail" class="form-control" type="text" name="image" value="{{$post->image}}">
										 </div>
										 <img id="holder" style="margin-top:15px;max-height:100px;" src="{{$post->image}}">
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

		  	CKEDITOR.replace( 'body', options);

		});
	</script>
@endsection