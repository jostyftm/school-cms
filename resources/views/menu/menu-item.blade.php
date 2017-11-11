@if(count($item->items) == 0)
    <li class="nav-item">
        <a class="nav-link" href="{{ url($item->url) }}">{{ $item->title }} </a>
    </li>
@else
    <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $item->title }} 
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            @foreach ($item->items as $item1)
                @if (count($item1->items) == 0)
                    <li><a href="{{ url($item1->url) }}" class="dropdown-item" target="{{$item1->target}}">{{ $item1->title }} </a></li>
                @else
                    @include('menu.menu-item', [ 'item' => $item1 ])
                @endif
            @endforeach
        </ul>
    </li>
@endif