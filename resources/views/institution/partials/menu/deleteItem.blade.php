<div class="modal fade" id="deleteItemModal" tabindex="-1" role="dialog" aria-labelledby="deleteItemModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      {!! Form::open(['route' => 'menu.destroyItem', 'method' => 'post', 'id'=> 'formDeleteItem']) !!}
        <div class="modal-header">
          <h5 class="modal-title" id="addItemModalLabel">Eliminar Item</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p id="modal-text">
          	
          </p>
        </div>
        <div class="modal-footer">
        	{!! Form::hidden('id', null, ['id'=>'id']) !!}
         	{!! Form::hidden('menu_id', $menu->id, []) !!}
         	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
         	{!! Form::submit('Eliminar', ['class'=>'btn btn-primary']) !!}
        </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>