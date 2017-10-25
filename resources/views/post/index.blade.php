@extends('post.home')

@section('posts')
	@foreach($posts as $post)
	<article class="blog-post">
		<header>
			<h2 class="blog-post-title">
				<a href="{{route('post.view', $post->slug)}}">{{$post->title}}</a>
			</h2>
			<p class="blog-post-meta">
				<time>{{$post->created_at}}</time>
			</p>
		</header>
		<img src="{{$post->image}}" alt="" class="blog-post-image card-img-top">
		<a href="{{route('post.view', $post->slug)}}">Leer mas →</a>
	</article>
	@endforeach
	{{$posts->render("pagination::bootstrap-4")}}
@endsection