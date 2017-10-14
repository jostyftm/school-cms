@extends('institution.dashboard.index')

@section('breadcrum')
<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="{{route('institution.dashboard')}}">Inicio</a></li>
		  <li class="breadcrumb-item active">Grupo</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
	
	<div class="row">
		<div class="col-md-12">
			<div class="clearfix">
				<h4 class="float-left">Grupos</h4>
				<a href="{{route('group.create')}}" class="float-right btn btn-sm btn-primary">Nuevo grupo</a>
			</div>
			<hr>
			<div class="card">
				<div class="card-body">
					
				</div>
			</div>
		</div>
	</div>

@endsection