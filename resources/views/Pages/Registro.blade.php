@extends('layouts.appAdmin')

@section('content')
</nav>
<div style="overflow: hidden" class="container" style="overflow: hidden">
  <div class="flash-message" >
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div>
  <h4>Baja De Usuario</h4><br>

  <form action="{{ route('Baja') }}" method = 'post'>
    {{ csrf_field() }}
    <div class="form-group row">
      <label for="nombre" class="col-sm-2 form-control-label" align="right">Nombre Completo</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="nombre" id="nombre" required>
      </div>

      <label for="nss" class="col-sm-2 form-control-label" align="right">Usuario</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="usuario" id="usuario" required>
      </div>
    </div>
    <br/><br/>
    <div class="form-group row">
      <div class="col-sm-offset-5 col-sm-10">
        <button type="submit" class="col-sm-2 btn btn-secondary" style="background-color: white; border: 1px solid #4CAF50; color: green">
            Eliminar
        </button>
      </div>
    </div>
  </form>
  <br/>
  <hr style = "height: 12px;border: 0;box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);">
  <br/>
  <h4>Registrar Nuevo Usuario</h4><br>
  <form action="{{ route('nuevoUsuario') }}" method = 'post'>
    {{ csrf_field() }}
    <div class="form-group row">
      <label for="name" class="col-sm-2 form-control-label" align="right">Nombre Completo</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="name" id="name" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="usrname" class="col-sm-2 form-control-label" align="right">Usuario</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="usrname" id="usrname" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="password" class="col-sm-2 form-control-label" align="right">Contraseña</label>
      <div class="col-sm-3">
        <input type="password" class="form-control" name="password" id="password" pattern="[0-9a-fA-F]{6,15}" required>
      </div>
    </div>
    <br/><br/>
    <div class="form-group row">
      <div class="col-sm-offset-5 col-sm-10">
        <button type="submit" class="col-sm-2 btn btn-secondary" style="background-color: white; border: 1px solid #4CAF50; color: green">
            Registrar
        </button>
      </div>
    </div>
  </form>

</div>
@endsection