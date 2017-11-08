<nav class="nav navbar-expand-lg navbar-dark">
	{{-- <a class="navbar-brand" href="#">
	    <img src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">
	</a> --}}
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="nav navbar-nav">
			<li class="nav-item">
				<a href="" class="nav-link active">Inicio</a>
			</li>
			@foreach($menu->items as $item)
				@if($item->parent_id == 0)
					@include('menu.menu-item', ['item'=>$item])
				@endif
			@endforeach
		</ul>
	</div>
</nav>