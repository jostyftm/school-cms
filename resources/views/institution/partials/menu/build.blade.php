@extends('institution.dashboard.index')

@section('css')
	<link rel="stylesheet" href="{{asset('css/toastr.css')}}">
@endsection

@section('breadcrum')
<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="{{route('institution.dashboard')}}">Inicio</a></li>
		  <li class="breadcrumb-item"><a href="{{route('menu.index')}}">Menu</a></li>
		  <li class="breadcrumb-item active">Construir</li>
		</ol>
	</div>
</div>
@endsection

@section('content')
	
	<div class="row">
		<div class="col-md-12">
			<div class="clearfix">
				<h4 class="float-left">Menu - {{$menu->name}}</h4>
				<button type="button" data-toggle="modal" data-target="#addItemModal" class="float-right btn btn-sm btn-primary">Agregar item</button>
			</div>
			<hr>
			@if($menu->name=='main')
				<div class="alert alert-info" role="alert">
					<h4 class="alert-heading">URL's predefinidas</h4>
					<p>Estas url se definen para mostrar informacioón predeterminada</p>
					<ul class="">
						<li class="">
							{{env('APP_URL')}}<small><strong>/</strong></small> 
							| URL para inicio
						</li>
						<li class="">
							{{env('APP_URL')}}<small><strong>/contract</strong></small>
							| URL para los contratos
						</li>
						<li class="">
							{{env('APP_URL')}}<small><strong>/headquarter</strong></small>
							| URL para mostrar las sedes
						</li>
					</ul>
					<hr>
					<p>
						Si quieres adicionar una pagina busca la url en la seccion de <a href="{{route('page.index')}}" target="_blank">Paginas</a>
					</p>
				</div>
			@endif
			<div class="card">
				<div class="card-body">
					<div class="dd" id="nestable3">
						@include('institution.partials.menu.menu_list')
					</div>
				</div>
			</div>
		</div>	
	</div>
	@include('institution.partials.menu.addItem')
	@include('institution.partials.menu.editItem')
	@include('institution.partials.menu.deleteItem')
@endsection

@section('js')
	<script src="{{asset('js/jquery.nestable.js')}}"></script>
	<script src="{{asset('js/toastr.min.js')}}"></script>
	<script>
		$(document).ready(function(){
			$('#nestable3').nestable();

			/*
				EDIT ITEM
			*/ 
			$('.editItem').click(function(e){
				e.preventDefault();

				let _this = $(this),
					_item_id = _this.parent().parent().data('id');

				$.get('/ajax/'+_item_id+'/findMenuItem', function(data){
					fillEditForm(data);
				}, 'json');
			});

			let fillEditForm = function(data){
				let _modal = $('#editItemModal'),
				 	_mTitle = _modal.find('#title'),
				 	_mUrl	= _modal.find('#url'),
				 	_mParent = _modal.find('#parent_id'),
				 	_mTarget = _modal.find('#target');
				 	_mId 	= _modal.find('#id');

				_mTitle.val(data.title);
				_mUrl.val(data.url);
				_mParent.val(data.parent_id);
				_mTarget.val(data.target);
				_mId.val(data.id);

				_modal.modal({
					keyboard: false,
					backdrop: 'static',
				});
			}

			$('#formEditItem').submit(function(e){
				
				let _this = $(this)
				    _id = _this.find('#id').val();

				e.preventDefault();

				$.ajax({
					url: '/institution/'+_id+'/updateItem',
					method: 'PUT',
					data: _this.serialize(),
					success: function(data){
						window.location.reload();
					},
					error: function(xhr, status){
						console.log(xhr);
						console.log(status);
					}
				});
			});

			/*
			*	DELETE ITEM
			*/
			$('.deleteItem').click(function(e){
				e.preventDefault();

				let _this = $(this),
					_item_id = _this.parent().parent().data('id');

				$.get('/ajax/'+_item_id+'/findMenuItem', function(data){
					console.log(data);

					let _modal = $('#deleteItemModal'),
						_iId = _modal.find('#id'),
						_iText = _modal.find('#modal-text');

					_iId.val(data.id);
					_iText.html('¿Esta seguro que desea eliminar el item <strong>' +data.title+'</strong>?')

					_modal.modal({
						keyboard: false,
						backdrop: 'static',
					});

				}, 'json');
			});

			$('#formDeleteItem').submit(function(e){
				let _this = $(this)
				    _id = _this.find('#id').val();

				e.preventDefault();

				$.ajax({
					url: '/institution/'+_id+'/destroyItem',
					method: 'DELETE',
					data: _this.serialize(),
					success: function(data){
						// console.log(data);
						window.location.reload();
					},
					error: function(xhr, status){
						console.log(xhr);
						console.log(status);
					}
				});
			});
			/*

			*/ 
			$('.dd').change(function(){
				$.post('/institution/menu/{{$menu->id}}/orderMenu', {
					order: JSON.stringify($('.dd').nestable('serialize')),
					_token: '{{ csrf_token() }}'
				}, function(data){
					toastr.success('Se ordeno el menu');
				});
			});
		});
	</script>
@endsection