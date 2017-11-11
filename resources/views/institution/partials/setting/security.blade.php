{!! Form::open(['route'=> ['setting.updatePassword', $institution], 'method'=> 'put']) !!}
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				{!! Form::label('password', 'Nueva contraseña', []) !!}
				{!! Form::password('password', ['class'=>'form-control']) !!}
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				{!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
			</div>
		</div>
	</div>
{!! Form::close() !!}