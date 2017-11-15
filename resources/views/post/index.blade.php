@extends('layouts.index')

@section('jumbotron')
    @include('layouts.jumbotron')
@endsection
@section('content')
    <div class="col-md-8 mt-4">
        @include('layouts.carousel')
        @foreach($posts as $post)
    	<!-- Blog Post -->
        <div class="card mb-4">
        	<img class="card-img-top" src="{{$post->image}}" alt="">
            <div class="card-body">
            	<h2 class="card-title">
            		<a href="{{route('post.view', $post->slug)}}" class="text-primary">{{$post->title}}
            		</a>
            	</h2>
            	<p class="card-text">
            		{!! $post->body !!}
            	</p>
              	<a href="{{route('post.view', $post->slug)}}" class="btn btn-primary bg-primary">Leer mar &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                <i class="fa fa-calendar"></i>
                {{$post->created_at->diffForHumans()}} publicado por
            	<a href="#">Admin</a>
            </div>
        </div>
        @endforeach
        {{$posts->render("pagination::bootstrap-4")}}
    </div>
    <div class="col-md-4 mt-4">
        @include('layouts.sidebar')
    </div>
@endsection