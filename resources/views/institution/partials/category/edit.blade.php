@extends('institution.dashboard.index')

@section('breadcrum')
<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="{{route('institution.dashboard')}}">Inicio</a></li>
		  <li class="breadcrumb-item active">Categorias</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
	
	<div class="row">
		<div class="col-md-12">
			<h4>Editar Categoria</h4>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7">
			<div class="card">
				<div class="card-body">
					{!! Form::open(['route' => ['category.update', $category], 'method' => 'put']) !!}
						<div class="row">
							<div class="col-md-12">
								<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
		  							{!! Form::label('name', 'Nombre') !!}
		  							{!! Form::text('name', $category->name, ['class' => 'form-control', 'id'=>'name']) !!}
				  				</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
		  							{!! Form::label('description', 'Descripción (opcional)') !!}
		  							{!! Form::textarea('description', $category->description, ['class' => 'form-control', 'id'=>'description']) !!}
				  				</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form group">
									{!!Form::submit('Actualizar', ['class'=>'btn btn-block btn-primary']);!!}
								</div>
							</div>
						</div>
					{!! Form::close()!!}
				</div>
			</div>
		</div>
	</div>
@endsection