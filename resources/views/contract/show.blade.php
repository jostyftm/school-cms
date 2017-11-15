@extends('layouts.index')


@section('content')
<div class="col-md-8 mt-3">
	<div class="card-body">
    	<h2 class="card-title">
    		{{$contract->name}}
    	</h2>
	   <small>publicado {{$contract->created_at->diffForHumans()}}</small>
    	<p class="card-text">
    		{!! $contract->description !!}
    	</p>
    	<embed src="{{$contract->file}}" type="application/pdf" width="100%" height="500">
    	</embed>
    </div>
</div>
<div class="col-md-4 mt-3">
	 @include('layouts.sidebar')
</div>
@endsection