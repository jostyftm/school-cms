<div class="card">
  <h5 class="card-header">Buscar</h5>
  <div class="card-body">
    <form action="/" method="get">
      <div class="input-group">
        <input type="text" class="form-control" name="q" placeholder="Search for...">
        <span class="input-group-btn">
          <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
  </div>
</div>

<!-- Categories Widget -->
<div class="card my-4">
  <h5 class="card-header">Categorias</h5>
  <div class="card-body">
    <ul class="list-group">
      @foreach($categories as $category)
      <li class="list-group-item d-flex justify-content-between align-items-center">
        <a href="#">{{$category->name}}</a>
        <span class="badge badge-primary badge-pill">{{count($category->posts)}}</span>
      </li>
      @endforeach
    </ul>
  </div>
</div>