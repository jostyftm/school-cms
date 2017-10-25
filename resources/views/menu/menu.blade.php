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
		    @foreach ($menus as $key => $item)
		        @if ($item['parent'] != 0)
		            @break
		        @endif
		        @include('menu.menu-item', ['item' => $item])
		    @endforeach
		</ul>
	</div>
</nav>