@extends('post.home')

@section('posts')
	<article class="blog-post">
		<header>
			<h2 class="blog-post-title">
				{{$post->title}}
			</h2>
			<p class="blog-post-meta">
				<time>{{$post->created_at}}</time>
			</p>
		</header>
		<img src="{{$post->image}}" alt="" class="blog-post-image card-img-top">
		{!! $post->body !!}
	</article>
@endsection