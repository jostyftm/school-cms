@extends('institution.dashboard.index')

@section('breadcrum')
<div class="row">
	<div class="col-md-10">
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="{{route('institution.dashboard')}}">Inicio</a></li>
		  <li class="breadcrumb-item active">Configuración</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
	
	<div class="row">
		<div class="col-md-10">
			<h4>Configuración</h4>
			<hr>	
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			  	<li class="nav-item">
			    	<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Cuenta</a>
			  	</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Seguridad</a>
				</li>
			</ul>
			<div class="card">
				<div class="card-body">
					<div class="tab-content" id="pills-tabContent">
					  	<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
					  		@include('institution.partials.setting.account')
					  	</div>
					  	<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
					  		@include('institution.partials.setting.security')
					  	</div>
				</div>
			</div>
		</div>
	</div>

@endsection