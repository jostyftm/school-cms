@extends('institution.dashboard.index')

@section('breadcrum')
<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="{{route('institution.dashboard')}}">Inicio</a></li>
		  <li class="breadcrumb-item active">Entradas</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="clearfix">
				<h4 class="float-left">Entradas</h4>
				<a href="{{route('post.create')}}" class="float-right btn btn-sm btn-primary">Nueva entrada</a>
			</div>
			<hr>
			<div class="card">
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th>Titulo</th>
								<th>Estado</th>
								<th>Fecha de creación</th>
								<th>Accion</th>
							</tr>
						</thead>
						<tbody>
							@foreach($posts as $post)
							<tr>
								<td>{!! $post->title !!}</td>
								<td>{!! $post->state !!}</td>
								<td>{!! $post->created_at !!}</td>
								<td>
									<a href="{{route('post.edit', $post)}}" class="btn btn-outline-primary btn-sm" title="Editar Entrada">
										<i class="fa fa-edit"></i>
									</a>
									<a href="{{route('post.destroy', $post)}}" class="btn btn-outline-danger btn-sm" title="Eliminar Entrada" onclick="return confirm('Desea eliminar esta entrada')">
										<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{{$posts->render("pagination::bootstrap-4")}}
				</div>
			</div>
		</div>	
	</div>
@endsection