@if($banner != NULL)
<div class="jumbotron text-white" style="background-image: url({{asset($banner->image)}});">
	<div class="container">
		<h1>{{$banner->name}}</h1>
		{!! $banner->description !!}
	</div>
</div>
@endif