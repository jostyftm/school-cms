<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('css/blog.css')}}" rel="stylesheet">
    @yield('css')

  </head>

  <body>
	<header>
      <div class="blog-masthead">
        <div class="container">
          @include('menu.menu')
        </div>
      </div>

      <div class="blog-header">
        <div class="container">
          <h1 class="blog-title">The Bootstrap Blog</h1>
          <p class="lead blog-description">An example blog template built with Bootstrap.</p>
        </div>
      </div>
    </header>

    <main role="main" class="container">

      <div class="row">
      	<div class="col-sm-8 blog-main">
			@yield('posts')
      	</div>
      	<aside class="col-sm-3 ml-sm-auto blog-sidebar">
          	{{-- <div class="sidebar-module">
            	<h4>Archives</h4>
            	<ol class="list-unstyled">
	              	<li><a href="#">March 2014</a></li>
	              	<li><a href="#">February 2014</a></li>
	              	<li><a href="#">January 2014</a></li>
	              	<li><a href="#">December 2013</a></li>
	              	<li><a href="#">November 2013</a></li>
	              	<li><a href="#">October 2013</a></li>
	              	<li><a href="#">September 2013</a></li>
	              	<li><a href="#">August 2013</a></li>
	              	<li><a href="#">July 2013</a></li>
	              	<li><a href="#">June 2013</a></li>
	              	<li><a href="#">May 2013</a></li>
	              	<li><a href="#">April 2013</a></li>
            	</ol>
          	</div>
          	<div class="sidebar-module">
            	<h4>Elsewhere</h4>
	            <ol class="list-unstyled">
	              <li><a href="#">GitHub</a></li>
	              <li><a href="#">Twitter</a></li>
	              <li><a href="#">Facebook</a></li>
	            </ol>
          	</div> --}}
        </aside>
     </div>
  	</main>
    {{-- <footer class="blog-footer">
      <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer> --}}
	 <!-- Scripts -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    @yield('js')
  </body>
</html>