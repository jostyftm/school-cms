@extends('institution.dashboard.index')

@section('content')
	<h4>Dashboard</h4><hr>
	<div class="row">
		{{-- SEDES --}}
		<div class="col-md-3 pb-2">
			<div class="widget card">
				<div class="card-img-top bg-primary text-white p-5">
					<h1 class="text-center">
						<i class="fa fa-institution"></i>
					</h1>
				</div>
				<div class="card-body text-center">
					<h2 class="card-title">{{count($headquarters)}}</h2>
					<p class="card-text">
						Sede{{(count($headquarters) > 1) ? 's' : ''}}
					</p>
					<a href="{{route('headquarter.index')}}" class="btn btn-primary btn-block">Ver Sede{{(count($headquarters) > 1) ? 's' : ''}}</a>
				</div>
			</div>
		</div>
		{{-- Funcionarios --}}
		<div class="col-md-3 pb-2">
			<div class="widget card">
				<div class="card-img-top bg-secondary text-white p-5">
					<h1 class="text-center">
						<i class="fa fa-users"></i>
					</h1>
				</div>
				<div class="card-body text-center">
					<h2 class="card-title">{{count($employees)}}</h2>
					<p class="card-text">
						Funcionario{{(count($employees) > 1) ? 's' : ''}}
					</p>
					<a href="{{route('employee.index')}}" class="btn btn-block btn-secondary">Ver Funcionario{{(count($employees) > 1) ? 's' : ''}}</a>
				</div>
			</div>
		</div>
		{{-- Contratos --}}
		<div class="col-md-3 pb-2">
			<div class="widget card">
				<div class="card-img-top bg-success text-white p-5">
					<h1 class="text-center">
						<i class="fa fa-book"></i>
					</h1>
				</div>
				<div class="card-body text-center">
					<h2 class="card-title">{{count($contracts)}}</h2>
					<p class="card-text">
						Contrato{{(count($contracts) > 1) ? 's' : ''}}
					</p>
					<a href="{{route('contract.index')}}" class="btn-block btn btn-success">Ver Contrato{{(count($contracts) > 1) ? 's' : ''}}</a>
				</div>
			</div>
		</div>
		{{-- Categorias --}}
		<div class="col-md-3 pb-2">
			<div class="widget card">
				<div class="card-img-top bg-danger text-white p-5">
					<h1 class="text-center">
						<i class="fa fa-tags"></i>
					</h1>
				</div>
				<div class="card-body text-center">
					<h2 class="card-title">{{count($categories)}}</h2>
					<p class="card-text">
						Categoria{{(count($categories) > 1) ? 's' : ''}}
					</p>
					<a href="{{route('category.index')}}" class="btn btn-danger btn-block">Ver Categoria{{(count($categories) > 1) ? 's' : ''}}</a>
				</div>
			</div>
		</div>
		{{-- Entardas --}}
		<div class="col-md-3 pb-2">
			<div class="widget card">
				<div class="card-img-top bg-warning text-white p-5">
					<h1 class="text-center">
						<i class="fa fa-file-text"></i>
					</h1>
				</div>
				<div class="card-body text-center">
					<h2 class="card-title">{{count($posts)}}</h2>
					<p class="card-text">
						Entrada{{(count($posts) > 1) ? 's' : ''}}
					</p>
					<a href="{{route('post.index')}}" class="btn btn-warning btn-block">Ver Entrada{{(count($posts) > 1) ? 's' : ''}}</a>
				</div>
			</div>
		</div>
		{{-- Paginas --}}
		<div class="col-md-3 pb-2">
			<div class="widget card">
				<div class="card-img-top bg-info text-white p-5">
					<h1 class="text-center">
						<i class="fa fa-files-o"></i>
					</h1>
				</div>
				<div class="card-body text-center">
					<h2 class="card-files-o">{{count($pages)}}</h2>
					<p class="card-text">
						Página{{(count($pages) > 1) ? 's' : ''}}
					</p>
					<a href="{{route('page.index')}}" class="btn btn-info btn-block">Ver Página{{(count($pages) > 1) ? 's' : ''}}</a>
				</div>
			</div>
		</div>
	</div>
@endsection