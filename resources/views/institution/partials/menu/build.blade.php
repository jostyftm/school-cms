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
@endsection

@section('js')
	<script src="{{asset('js/jquery.nestable.js')}}"></script>
	<script src="{{asset('js/toastr.min.js')}}"></script>
	<script>
		$(document).ready(function(){
			$('#nestable3').nestable();

			$('.editItem').click(function(e){
				e.preventDefault();

				let _this = $(this),
					_item_id = _this.parent().parent().data('id');

				$.get('/ajax/'+_item_id+'/findMenuItem', function(data){
					fillEditForm(data);
				}, 'json');
			});

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

			$('.dd').change(function(){
				$.post('/institution/menu/{{$menu->id}}/orderMenu', {
					order: JSON.stringify($('.dd').nestable('serialize')),
					_token: '{{ csrf_token() }}'
				}, function(data){
					toastr.success('Se ordeno el menu');
				});
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
		});
	</script>
@endsection