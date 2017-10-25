@if ($item['submenu'] == [])
    <li class="nav-item">
        <a class="nav-link" href="{{ route('page.view',$item['slug']) }}">{{ $item['name'] }} </a>
    </li>
@else
    <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $item['name'] }} 
            <span class="caret"></span>
        </a>
        <div class="dropdown-menu sub-menu">
            @foreach ($item['submenu'] as $submenu)
                @if ($submenu['submenu'] == [])
                    <a href="{{ route('page.view',$submenu['slug']) }}" class="dropdown-item">{{ $submenu['name'] }} </a>
                @else
                    @include('menu.menu-item', [ 'item' => $submenu ])
                @endif
            @endforeach
        </div>
        {{-- <ul class="dropdown-menu sub-menu">
            @foreach ($item['submenu'] as $submenu)
                @if ($submenu['submenu'] == [])
                    <li><a href="{{ url('menu',['id' => $submenu['id'], 'slug' => $submenu['slug']]) }}">{{ $submenu['name'] }} </a></li>
                @else
                    @include('menu.menu-item', [ 'item' => $submenu ])
                @endif
            @endforeach
        </ul> --}}
    </li>
@endif