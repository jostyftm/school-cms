<div id="carouselExampleControls" class="carousel slide mb-5" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#item2" data-slide-to="1" class=""></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('img/banner.jpg')}}" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
	    <h3>Titulo 1</h3>
	    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	    tempor incididunt ut labore et dolore magna aliqua.</p>
	  </div>
    </div>
    <div class="carousel-item" id="item2">
      <img class="d-block w-100" src="{{asset('img/banner.jpg')}}" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
      <h3>Titulo 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>