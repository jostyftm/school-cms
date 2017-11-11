@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row justify-content-md-center mt-5 mb-5">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Iniciar Sesión</div>
                <div class="card-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/institution_login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">Correo electronico</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block">
                                    Iniciar sesión
                            </button>

                            <a class="btn btn-link" href="{{ url('/institution_password/reset') }}">
                                Olvide mi contraseña?
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection