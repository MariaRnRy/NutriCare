@extends('layouts.app')

@section('content')
<nav>
  <div class="container">
    <ul class="nav nav-tabs nav-justified">
      <li><a>Datos Fisicos</a></li>
      <li class="active"><a>Antecedentes</a></li>
      <li><a>Datos Alimenticios</a></li>
      <li><a>Plan Alimenticio</a></li>
    </ul>
  </div>
</nav>
  <br>
<div class="container" style="overflow: hidden">
  <form action = "{{ route('guardarAnt') }}" method = 'POST'>
    {{ csrf_field() }}
    <h5><b>Expediente</b></h5>
      <div class="form-group row">
      <label for="nombre" class="col-sm-1 form-control-label">Nombre</label>
      <div class="col-sm-3">
        <span style="color:blue" id="pesoTeo"><?php foreach ($datos as $dato){ echo $dato->nombre; } ?></span>
      </div>
      <label for="nss" class="col-sm-1 form-control-label" align="right">Sexo</label>
      <div class="col-sm-2">
        <span style="color:blue" id="pesoTeo"><?php foreach ($datos as $dato){ echo $dato->sexo; } ?></span>
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
      </div>
    </div>

  <hr><br>
    <div class="form-group row">
      <label class="col-sm-3 form-control-label">Nutricionales</label>
      <label class="col-sm-3 form-control-label">Patologicos</label>
    </div>
    <div class="form-group row">
      <div class="col-sm-3">
        <input type="checkbox" name="bajoPeso" value="si"> Bajo Peso<br>
        <input type="checkbox" name="sobrePeso" value="si"> Sobre Peso<br>
        <input type="checkbox" name="desnutricion" value="si"> Desnutrición<br>
        <input type="checkbox" name="obecidad" value="si"> Obecidad<br>
      </div>
      <div class="col-sm-3">
        <input type="checkbox" name="hipertencion" value="si"> Hipertencion<br>
        <input type="checkbox" name="diabetes" value="si"> Diabetes<br>
        <input type="checkbox" name="cardiopatias" value="si"> Cardiopatias<br>
        <input type="checkbox" name="nefropatias" value="si"> Nefropatias<br>
      </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-3 form-control-label">Hereditarios</label>
      <label class="col-sm-3 form-control-label">Otros</label>
    </div>
    <div class="form-group row">
      <div class="col-sm-3">
        <input type="checkbox" name="cancer" value="si"> Cancer<br>
        <input type="checkbox" name="gastritis" value="si"> Gastritis<br>
        <input type="checkbox" name="colitis" value="si"> Colitis<br>
      </div>
      <div class="col-sm-3">
        <input type="checkbox" name="alcoholismo" value="si"> Alcoholismo<br>
        <input type="checkbox" name="tabaquismo" value="si"> Tabaquismo<br>
      </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-3 form-control-label">Alergias</label>
    </div>
    <div class="form-group row">
      <label for="alergias" class="col-sm-2 form-control-label" align="right">Medicamentos</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" name="alergias">
      </div>
    </div>

    <br>
    <div class="form-group row">
      <div class="col-sm-offset-5 col-sm-10">
        <button type="submit" class="col-sm-2 btn btn-secondary" style="background-color: white; border: 1px solid #4CAF50; color: green">
            Guardar
        </button>
      </div>
    </div>
  </form>
</div>
@endsection