<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top border-secondary">
	<div class="container">
		<a class="navbar-brand" href="#">
		    <img src="{{asset('files/shares/imagenes/IJAG(1).png')}}" width="30" height="30" alt="">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="nav navbar-nav mr-auto">
				@if($menu != NULL)
					@foreach($menu->items->sortBy('order') as $item)
						@if($item->parent_id == 0)
							@include('menu.menu-item', ['item'=>$item])
						@endif
					@endforeach
				@endif
			</ul>
			<ul class="nav navbar-nav">
				@if(Auth()->guard('web_institution')->check())
				<li class="nav-item">
					
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						{{ $institution->name}}
						<i class="fa fa-caret-down"></i>
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
			        	<a class="dropdown-item" href="{{route('institution.dashboard')}}">Panel</a>
			        	<a class="dropdown-item" href="{{route('setting.index')}}">Configuración</a>
			        <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="{{ route('institution.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              			Salir
		            </a>

		              <form id="logout-form" action="{{ route('institution.logout') }}" method="POST" style="display: none;">
		                {{ csrf_field() }}
		              </form>
			        </div>
				</li>
				@else
				<li class="nav-item">
					<a class="nav-link" href="/institution_login">Acceder</a>
				</li>
				@endif
			</ul>
		</div>
	</div>
</nav>