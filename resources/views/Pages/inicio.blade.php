@extends('layouts.app')

@section('content')
<div style="overflow: hidden" class="container">
  <div class="flash-message" >
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div>
  <h4>Buscar Paciente</h4><br>
  <form action="{{ route('buscar') }}" method='POST'>
    {{ csrf_field() }}
    <div class="form-group row">
      <label for="nombre" class="col-sm-2 form-control-label">Nombre</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="nombre" id="nombre" required>
      </div>
      <label for="nss" class="col-sm-2 form-control-label" align="right">NSS</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="nss" id="nss">
      </div>
    </div>
    <br/><br/>
    <div class="form-group row">
      <div class="col-sm-offset-5 col-sm-10">
        <button type="submit" class="col-sm-2 btn btn-secondary" style="background-color: white; border: 1px solid #4CAF50; color: green">
            Buscar
        </button>
      </div>
    </div>
  </form>

  <br/>
  <hr style = "height: 12px;border: 0;box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);">
  <br/>

  <h4>Nuevo Paciente</h4><br>

  <form action = "{{ route('nuevo') }}" method = 'POST'>
    {{ csrf_field() }}
    <div class="form-group row">
      <label for="nombre" class="col-sm-2 form-control-label">Nombre</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="nombre" id="nombre" required>
      </div>
      <label for="nss" class="col-sm-2 form-control-label" align="right">NSS</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="nss" id="nss">
      </div>
    </div>

    <div class="form-group row">
      <label for="fecha_naci" class="col-sm-2 form-control-label">Fecha de Naciemiento</label>
      <div class="col-sm-2">
        <input type="date" class="form-control" name="fecha_naci" id="fecha_naci" required>
      </div>

      <label for="sexo" class="col-sm-2 form-control-label" align="right" >Sexo</label>
      <div class="col-sm-2">
        <input type="radio" name="sexo" id="masc" value="Masculino" required> Masculino<br>
        <input type="radio" name="sexo" id="fem" value="Femenino"> Femenino<br>
      </div>
    </div>

    <div class="form-group row ">
      <label for="ocupacion" class="col-sm-2 form-control-label">Ocupación</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" name="ocupacion" id="ocupacion">
      </div>
      <label for="telefono" class="col-sm-2 form-control-label" align="right" >Telefono</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" name="telefono" id="telefono">
      </div>
    </div>

    <div class="form-group row">
      <label for="direccion" class="col-sm-2 form-control-label" >Dirección</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="direccion" name="direccion" onFocus="geolocate()" required/> 
      </div>
    </div>
    <br/><br/>
    <div class="form-group row">
      <div class="col-sm-offset-5 col-sm-10">
        <button type="submit" class="col-sm-2 btn btn-secondary" style="background-color: white; border: 1px solid #4CAF50; color: green">
            Crear
        </button>
      </div>
    </div>
  </form>
  <div class="floating-box">
    <script>
      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };
      function initAutocomplete() {
        autocomplete = new google.maps.places.Autocomplete(
            (document.getElementById('direccion')),
            {types: ['geocode']});

        autocomplete.addListener('place_changed', fillInAddress);
      }
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlx4lTemnq-cUeRYrsYKBI9VOMU2X11Mw&libraries=places&callback=initAutocomplete" async defer></script>
  </div>
</div>
@endsection