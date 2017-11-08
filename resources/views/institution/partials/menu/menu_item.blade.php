@if(count($item->items) > 0)
	<li class="dd-item" data-id="{{$item->id}}">
		<div class="float-right item_actions">
			<a href="#" class="btn btn-sm btn-outline-primary editItem">
				<i class="fa fa-edit"></i>
			</a>
			<a href="" class="btn btn-sm btn-outline-danger deleteItem">
				<i class="fa fa-trash"></i>
			</a>
		</div>
		<div class="dd-handle dd3-handle">
			<strong>{{$item->title}}</strong>
			<small>{{$item->url}}</small>
		</div>
		<ol class="dd-list">
			@foreach($item->items as $item1)
				@if(count($item1->items) == 0)
					<li class="dd-item" data-id="{{$item1->id}}">
						<div class="float-right item_actions">
							<a href="#" class="btn btn-sm btn-outline-primary editItem">
								<i class="fa fa-edit"></i>
							</a>
							<a href="" class="btn btn-sm btn-outline-danger deleteItem">
								<i class="fa fa-trash"></i>
							</a>
						</div>
						<div class="dd-handle dd3-handle">
							<strong>{{$item1->title}}</strong>
							<small>{{$item1->url}}</small>
						</div>
					</li>
				@else
					@include('institution.partials.menu.menu_item', ['item' => $item1])
				@endif
			@endforeach
		</ol>
	</li>
@else		
	<li class="dd-item" data-id="{{$item->id}}">
		<div class="float-right item_actions">
			<a href="#" class="btn btn-sm btn-outline-primary editItem">
				<i class="fa fa-edit"></i>
			</a>
			<a href="" class="btn btn-sm btn-outline-danger deleteItem">
				<i class="fa fa-trash"></i>
			</a>
		</div>
		<div class="dd-handle dd3-handle">
			<strong>{{$item->title}}</strong>
			<small>{{$item->url}}</small>
		</div>
	</li>
@endif