@extends('institution.dashboard.index')

@section('breadcrum')
<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="{{route('institution.dashboard')}}">Inicio</a></li>
		  <li class="breadcrumb-item active">Banner</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
	@if($banner != NULL)
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-12">
				<div class="clearfix">
					<h2 class="mr-auto float-left">Banner</h2>
					<div class="float-right">
						<a href="{{route('banner.edit', $banner)}}" class="btn btn-outline-primary btn-sm">
						<i class="fa fa-edit"></i>
						</a> 
						<a href="{{route('banner.destroy', $banner)}}" class="btn btn-outline-danger btn-sm">
							<i class="fa fa-trash"></i>
						</a> 
					</div>
				</div>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="jumbotron text-white" style="background-image: url({{asset($banner->image)}});">
					<div class="container">
						<h1>{{$banner->name}}</h1>
						{!! $banner->description !!}
					</div>
				</div>
			</div>
		</div>
	</div>
	@else
	<div class="col-md-12">
		<div class="jumbotron">
			<h1 class="display-3">Aun no tienes un banner</h1>
			<p class="lead">En este banner puedes incluir un anuncio que sea relevante para tu página</p>
			<hr class="my-4">
			<p class="lead">
		    	<a class="btn btn-primary btn-lg" href="{{route('banner.create')}}" role="button">Crear banner</a>
		  	</p>
		</div>
	</div>
	@endif
@endsection