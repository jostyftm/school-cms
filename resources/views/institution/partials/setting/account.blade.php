{!! Form::open(['route'=>['setting.updateAccount', $institution], 'method'=>'put']) !!}
	<h4>Información de la cuenta</h4>
		<hr>
	<div class="row">
		<div class="col-md-4">
			
		</div>
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						{!! Form::label('name', 'Nombre', []) !!}
						{!! Form::text('name', $institution->name, ['class'=>'form-control']) !!}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						{!! Form::label('dane_code', 'Codigo DANE', []) !!}
						{!! Form::text('dane_code', $institution->dane_code, ['class'=>'form-control']) !!}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						{!! Form::label('email', 'Correo electronico', []) !!}
						{!! Form::text('email', $institution->email, ['class'=>'form-control']) !!}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						{!! Form::hidden('id', $institution->id, []) !!}
						{!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
{!! Form::close() !!}