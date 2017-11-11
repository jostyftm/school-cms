@extends('layouts.index')

@section('content')
<div class="container mt-4">
	<div class="row">
		<!-- Blog Entries Column -->
    	<div class="col-md-8">
    		<!-- Blog Post -->
        	<img class="card-img-top" src="{{$page->image}}" alt="">
            <small class="text-uppercase text-secondary">
                <i class="fa fa-calendar"></i>
                Publicado {{$page->created_at->diffForHumans()}}
            </small>
            <div class="card-body">
            	<h2 class="card-title text-center">
            		{{$page->title}}
            	</h2>
            	<p class="card-text">
            		{!! $page->body !!}
            	</p>
            </div>
    	</div>
        <div class="col-md-4">
            @include('layouts.sidebar')
        </div>
    </div>
</div>
@endsection