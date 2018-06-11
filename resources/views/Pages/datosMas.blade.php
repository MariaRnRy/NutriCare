@extends('layouts.app')

@section('content')
<nav>
  <div class="container">
    <ul class="nav nav-tabs nav-justified">
      <li class="active"><a>Datos Fisicos</a></li>
      <li><a>Antecedentes</a></li>
      <li><a>Datos Alimenticios</a></li>
      <li><a>Plan Alimenticio</a></li>
    </ul>
  </div>
</nav>
  <br><br>
  <?php include '\xampp\htdocs\imss\resources\views\Pages\ajaxM.php';?>
<div style="overflow: hidden" class="container">
 <form action = "{{ route('guardar') }}" method = 'POST'>
  {{ csrf_field() }}
    <h5><b>Expediente</b></h5>
    <div class="form-group row">
      <label for="nombre" class="col-sm-1 form-control-label">Nombre</label>
      <div class="col-sm-3">
        <span style="color:blue"><?php foreach ($datos as $dato){ echo $dato->nombre; } ?></span>
      </div>
      <label for="nss" class="col-sm-1 form-control-label" align="right">Sexo</label>
      <div class="col-sm-2">
        <span style="color:blue"><?php foreach ($datos as $dato){ echo $dato->sexo; } ?></span>
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
      </div>
    </div>

  <hr><br>

    <div class="form-group row">
      <label for="peso" class="col-sm-2 form-control-label">Peso Actual</label>
      <div class="col-sm-2">
        <input type="number" step="0.01" min="0" class="form-control" name="peso" id="pesoActual"
        onkeyup="formulas1(this.value)" required>
      </div>
      <label class="col-sm-2 form-control-label" align="right">Peso Teo. Ideal</label>
      <div class="col-sm-1">
        <p><span style="color:blue" id="pesoTeo"></span></p>
      </div>
      <label class="col-sm-1 form-control-label" align="right">Peso Inferior</label>
      <div class="col-sm-1">
        <p><span style="color:blue" id="pesoInfe"></span></p>
      </div>
      <label class="col-sm-1 form-control-label" align="right">Peso Superior</label>
      <div class="col-sm-1">
        <p><span style="color:blue" id="pesoSupe"></span></p>
      </div>
    </div>

    <div class="form-group row">
      <label for="peso_hab" class="col-sm-2 form-control-label">Peso Habitual</label>
      <div class="col-sm-2">
        <input type="number" step="0.01" min="0" class="form-control" name="peso_hab" id="peso_hab"
        onkeyup="formulas1(this.value)" required>
      </div>
      <label for="por_peso_teo" class="col-sm-2 form-control-label" align="right">% Peso Teorico</label>
      <div class="col-sm-3">
        <p><span style="color:blue" id="ppt"></span></p>
      </div>
    </div>

    <div class="form-group row">
      <label for="estatura" class="col-sm-2 form-control-label">Estatura</label>
      <div class="col-sm-2">
        <input type="number" step="0.01" min="0" class="form-control" name="estatura" id="estatura"
        onkeyup="formulas1(this.value)" required>
      </div>
      <label for="por_peso_hab" class="col-sm-2 form-control-label" align="right">% Peso Habitual</label>
      <div class="col-sm-3">
        <p><span style="color:blue" id="pph"></span></p>
      </div>
    </div>

    <div class="form-group row">
      <label for="cintura" class="col-sm-2 form-control-label">Cintura</label>
      <div class="col-sm-2">
        <input type="number" step="0.01" min="0" class="form-control" name="cintura" id="cintura"
        onkeyup="formulas1(this.value)" required>
      </div>
      <label for="imc" class="col-sm-2 form-control-label" align="right">IMC</label>
      <div class="col-sm-2">
        <p><span style="color:blue" id="imc"></span></p>
      </div>
    </div>

    <div class="form-group row">
      <label for="cadera" class="col-sm-2 form-control-label">Cadera</label>
      <div class="col-sm-2">
        <input type="number" step="0.01" min="0" class="form-control" name="cadera" id="cadera"
        onkeyup="formulas1(this.value)" required>
      </div>
      <label for="ppci" class="col-sm-2 form-control-label" align="right">P.P.C.I</label>
      <div class="col-sm-3">
        <p><span style="color:blue" id="ppci"></span></p>
      </div>
    </div>

    <div class="form-group row">
      <label for="peri_abd" class="col-sm-2 form-control-label">Perimetro Abdominal</label>
      <div class="col-sm-2">
        <input type="number" step="0.01" min="0" class="form-control" name="peri_abd" id="peri_abd"
        onkeyup="formulas1(this.value)" required>
      </div>
      <div class="col-sm-3">
        <p><span style="color:blue" id="PA"></span></p>
      </div>
      <label for="clasificacion" class="col-sm-1 form-control-label" align="right">Clasificacion</label>
      <div class="col-sm-3">
        <p><span style="color:blue" id="clasif"></span></p>
      </div>
    </div>

    <div class="form-group row">
      <label for="circun_mu" class="col-sm-2 form-control-label">Circunferencia Muñeca</label>
      <div class="col-sm-2">
        <input type="number" step="0.01" min="0" class="form-control" name="circun_mu" id="circun_mu"
        onkeyup="formulas1(this.value)" required>
      </div>
      <div class="col-sm-3">
        <p><span style="color:blue" id="CM"></span></p>
      </div>
      <label for="icc" class="col-sm-1 form-control-label">I.C.C</label>
      <div class="col-sm-3">
        <p><span style="color:blue" id="icc"></span></p>
      </div>
    </div>

    <div class="form-group row">
      <label for="circun_mu" class="col-sm-2 form-control-label">Miembros Amputados</label>
      <div class="col-sm-2">
        <select class="c-select" onchange="formulas1(this.value)" id="miembrosAp" name="miembrosAp">
          <option selected="">Seleccionar</option>
          <option value="0.7_Mano">Mano</option>
          <option value="2.3_Antebrazo y Mano">Antebrazo y Mano</option>
          <option value="5.0_Miembro Superior">Miembro Superior</option>
          <option value="1.5_Pie">Pie</option>
          <option value="5.9_Pierna y Pie">Pierna y Pie</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
    <label for="icc" class="col-sm-2 form-control-label">Peso Corregido</label>
      <div class="col-sm-2">
        <p><span style="color:blue" id="MP"></span></p>
      </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-3 form-control-label">Factores que intervienen:</label>
    </div>
    <div class="form-group row">
      <label for="ejercicio" class="col-sm-1 form-control-label" align="right">Ejercicio</label>
      <div class="col-sm-2">
        <input type="radio" name="ejercicio" value="si" required> Sí<br>
        <input type="radio" name="ejercicio" value="no"> No<br>
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