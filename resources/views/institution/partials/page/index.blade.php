@extends('institution.dashboard.index')

@section('breadcrum')
<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="{{route('institution.dashboard')}}">Inicio</a></li>
		  <li class="breadcrumb-item active">Página</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="clearfix">
				<h4 class="float-left">Página</h4>
				<a href="{{route('page.create')}}" class="float-right btn btn-sm btn-primary">Nueva Página</a>
			</div>
			<hr>
			<div class="card">
				<div class="card-body">
					<table class="table table-responsive">
						<thead>
							<tr>
								<th>Titulo</th>
								<th>Estado</th>
								<th>Url</th>
								<th>Fecha de creación</th>
								<th>Accion</th>
							</tr>
						</thead>
						<tbody>
							@foreach($pages as $page)
							<tr>
								<td>{!! $page->title !!}</td>
								<td>{!! $page->state !!}</td>
								<td>{{ env('APP_URL')}}/page/{!! $page->slug !!}</td>
								<td>{!! $page->created_at->diffForHumans() !!}</td>
								<td>
									<a href="{{route('page.view', $page->slug)}}" class="btn btn-outline-secondary btn-sm" title="Ver Página" target="_blank">
										<i class="fa fa-eye"></i>
									</a>
									<a href="{{route('page.edit', $page)}}" class="btn btn-outline-primary btn-sm" title="Editar Página">
										<i class="fa fa-edit"></i>
									</a>
									<a href="{{route('page.destroy', $page)}}" class="btn btn-outline-danger btn-sm" title="Eliminar Página" onclick="return confirm('Desea eliminar esta página')">
										<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{{$pages->render("pagination::bootstrap-4")}}
				</div>
			</div>
		</div>	
	</div>
@endsection