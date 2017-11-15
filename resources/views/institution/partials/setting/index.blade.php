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
			    	<a class="nav-link active" id="pills-account-tab" data-toggle="pill" href="#pills-account" role="tab" aria-controls="pills-account" aria-selected="true">Cuenta</a>
			  	</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-security-tab" data-toggle="pill" href="#pills-security" role="tab" aria-controls="pills-security" aria-selected="false">Seguridad</a>
				</li>
				{{-- <li class="nav-item">
					<a class="nav-link" id="pills-website-tab" data-toggle="pill" href="#pills-website" role="tab" aria-controls="pills-website" aria-selected="false">Sitio</a>
				</li> --}}
			</ul>
			<div class="card">
				<div class="card-body">
					<div class="tab-content" id="pills-tabContent">
					  	<div class="tab-pane fade show active" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab">
					  		@include('institution.partials.setting.account')
					  	</div>
					  	<div class="tab-pane fade" id="pills-security" role="tabpanel" aria-labelledby="pills-security-tab">
					  		@include('institution.partials.setting.security')
					  	</div>
					  	{{-- <div class="tab-pane fade" id="pills-website" role="tabpanel" aria-labelledby="pills-website-tab">
					  		@include('institution.partials.setting.security')
					  	</div> --}}
				</div>
			</div>
		</div>
	</div>

@endsection