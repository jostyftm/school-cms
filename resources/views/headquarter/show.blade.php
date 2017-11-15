@extends('layouts.index')


@section('content')
	<div class="col-md-12">
		<div class="card mb-3 mt-3">
			<img class="card-img-top" src="{{asset($headquarter->avatar)}}" alt="Card image cap">
			<div class="card-body">
		    	<h4 class="card-title">{{$headquarter->name}}</h4>
		    	{{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
		    	<p>
		    		Dirección: {{$headquarter->address->address}}
		    	</p>
		    	<p>
		    		Telefono: {{$headquarter->address->phone}}
		    	</p>
		    	<p>
		    		Email: {{$headquarter->address->email}}
		    	</p>
		    	<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		  	</div>
		</div>
	</div>
@endsection