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
		<div class="col-md-7">
			<h4>Categorias</h4>
			<hr>	
			<div class="card">
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th>Categoria</th>
								<th>Descripción</th>
								<th>Slug</th>
								<th>Acción</th>
							</tr>
						</thead>
						<tbody>
							@foreach($categories as $category)
							<tr>
								<td>{{ $category->name}}</td>
								<td>{{ $category->description}}</td>
								<td>{{ $category->slug}}</td>
								<td>
									<a href="{{route('category.edit', $category)}}" class="btn btn-outline-primary btn-sm" title="Editar Categoria">
										<i class="fa fa-edit"></i>
									</a>
									<a href="{{route('category.destroy', $category)}}" class="btn btn-outline-danger btn-sm" title="Eliminar Categoria">
										<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{{$categories->render("pagination::bootstrap-4")}}
				</div>
			</div>
		</div>
		<div class="col-md-5">
			<h4>Crear Categoria</h4>
			<hr>
			<div class="card">
				<div class="card-body">
					{!! Form::open(['route' => 'category.store', 'method' => 'post']) !!}
						<div class="row">
							<div class="col-md-12">
								<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
		  							{!! Form::label('name', 'Nombre') !!}
		  							{!! Form::text('name', old('name'), ['class' => 'form-control', 'id'=>'name']) !!}
				  				</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
		  							{!! Form::label('description', 'Descripción (opcional)') !!}
		  							{!! Form::textarea('description', old('description'), ['class' => 'form-control', 'id'=>'description']) !!}
				  				</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form group">
									{!!Form::submit('Crear', ['class'=>'btn btn-block btn-primary']);!!}
								</div>
							</div>
						</div>
					{!! Form::close()!!}
				</div>
			</div>
		</div>
	</div>

@endsection