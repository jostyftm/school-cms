<div class="modal fade" id="editItemModal" tabindex="-1" role="dialog" aria-labelledby="editItemModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      {!! Form::open(['route' => 'menu.updateItem', 'method' => 'post', 'id'=>'formEditItem']) !!}
        <div class="modal-header">
          <h5 class="modal-title" id="addItemModalLabel">Agregar Item</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container-fuild">
            <div class="row">
              <div class="col-md-12">
                {!! Form::label('title', 'Titutlo', []) !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                {!! Form::label('url', 'URL', []) !!}
                {!! Form::text('url', null, ['class'=>'form-control']) !!}
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                {!! Form::label('parent_id', 'Superior', []) !!}
                {!! Form::select('parent_id', $items_add, null, ['class'=>'form-control', 'placeholder'=>'Item superior']) 
                !!}
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                {!! Form::label('target', 'Abrir en ', []) !!}
                {!! Form::select('target', 
                    ['_blank' => 'nueva ventana','_self' => 'en la misma pagina'],
                    null, ['class'=>'form-control']) 
                !!}
              </div>
          </div>
        </div>
        <div class="modal-footer">
          {!! Form::hidden('id', null, ['id'=>'id']) !!}
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          {!! Form::submit('Agregar', ['class'=>'btn btn-primary']) !!}
        </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>