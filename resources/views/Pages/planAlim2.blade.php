@extends('layouts.app')

@section('content')
<nav>
  <div class="container">
    <ul class="nav nav-tabs nav-justified">
      <li><a>Datos Fisicos</a></li>
      <li class="active"><a>Plan Alimenticio</a></li>
    </ul>
  </div>
</nav>
<br><br>
  <?php include '\xampp\htdocs\imss\resources\views\Pages\ajaxTabla_general.php';?>
  <?php include '\xampp\htdocs\imss\resources\views\Pages\ajaxTablaGen.php';?>
  <?php include '\xampp\htdocs\imss\resources\views\Pages\ajaxOMS.php';?>
  <?php include '\xampp\htdocs\imss\resources\views\Pages\Formulas\res\formulas.php';?>
<div style="overflow: hidden" class="container">
  <form action = "{{ route('guardarPlan') }}" method="post">
    {{ csrf_field() }}
    <?php
    foreach ($datos as $dato)
    {
      $peso = $dato->peso_habitual;
      $estatura = $dato->estatura;
    }
    foreach ($paciente as $pac)
    {
      $nacimiento = $pac->f_nacimiento;
    }
    $fecha = date_create()->format('d-m-Y');
    $hoy = new DateTime($fecha);
    $naci = new DateTime($nacimiento);
    $interval = $hoy->diff($naci);
    $edad = $interval->y;

    $oms = oms_geb($edad,$peso);
    $hb = hb_geb($edad,$peso,$estatura);
    $owen = owen_geb($peso);
    $val = val_geb($edad,$peso);
    $msj = msj_geb($edad,$peso,$estatura);
    ?>
    <div class="form-group row">
      <label for="nombre" class="col-sm-1 form-control-label">Nombre</label>
      <div class="col-sm-3">
        <span style="color:blue"><?php foreach ($paciente as $pac){ echo $pac->nombre; } ?></span>
      </div>
      <label for="nss" class="col-sm-1 form-control-label" align="right">Sexo</label>
      <div class="col-sm-2">
        <span style="color:blue"><?php foreach ($paciente as $pac){ echo $pac->sexo; } ?></span>
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
      </div>
    </div>
    <div class="form-group row ">
      <label class="col-sm-3 form-control-label" align="right">Raciones</label>
      <label class="col-sm-1 form-control-label" align="center">H.C.</label>
      <label class="col-sm-1 form-control-label" align="left">Proteinas</label>
      <label class="col-sm-1 form-control-label" align="center">Lipidos</label>
      <label class="col-sm-2 form-control-label" align="left">Kilo Calorias</label>
    </div>
    <div class="form-group row ">
      <label for="leche" class="col-sm-2 form-control-label">Leche</label>
      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="leche" id="leche" onkeyup="formulas2(this.value)">
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:brown" id="lec_hc"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:brown" id="lec_prot"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:brown" id="lec_lip"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:green" id="lec_kcals"></span></p>
      </div>
    </div>

       <div class="form-group row ">
      <label for="carne" class="col-sm-2 form-control-label">Carne</label>
      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="carne" id="carne" onkeyup="formulas2(this.value)">
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:brown" id="car_hc"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:brown" id="car_prot"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:brown" id="car_lip"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:green" id="car_kcals"></span></p>
      </div>
    </div>

         <div class="form-group row ">
      <label for="fruta" class="col-sm-2 form-control-label">Fruta</label>
      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="fruta" id="fruta" onkeyup="formulas2(this.value)">
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:brown" id="frut_hc"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:brown" id="frut_prot"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:brown" id="frut_lip"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:green" id="frut_kcals"></span></p>
      </div>
    </div>

        <div class="form-group row ">
      <label for="vegetales" class="col-sm-2 form-control-label">Vegetales</label>
      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="vegetales" id="vegetales" onkeyup="formulas2(this.value)">
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:brown" id="veg_hc"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:brown" id="veg_prot"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:brown" id="veg_lip"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:green" id="veg_kcals"></span></p>
      </div>
    </div>


    <div class="form-group row ">
      <label for="cerytub" class="col-sm-2 form-control-label">Cereales y Tuberculos</label>
      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="cerytub" id="cerytub" onkeyup="formulas2(this.value)">
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:brown" id="cyt_hc"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:brown" id="cyt_prot"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:brown" id="cyt_lip"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:green" id="cyt_kcals"></span></p>
      </div>
    </div>



    <div class="form-group row ">
      <label for="leguminosa" class="col-sm-2 form-control-label">Leguminosa</label>
      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="leguminosa" id="leguminosa" onkeyup="formulas2(this.value)">
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:brown" id="leg_hc"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:brown" id="leg_prot"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:brown" id="leg_lip"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:green" id="leg_kcals"></span></p>
      </div>
    </div>

    <div class="form-group row ">
      <label for="grasas" class="col-sm-2 form-control-label">Grasas</label>
      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="grasas" id="grasas" onkeyup="formulas2(this.value)">
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:brown" id="gra_hc"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:brown" id="gra_prot"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:brown" id="gra_lip"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:green" id="gra_kcals"></span></p>
      </div>
    </div>


    <div class="form-group row ">
      <label for="azucar" class="col-sm-2 form-control-label">Azucar</label>
      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="azucar" id="azucar" onkeyup="formulas2(this.value)">
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:brown" id="azuca_hc"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:brown" id="azuca_prot"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:brown" id="azuca_lip"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:green" id="azuca_kcals"></span></p>
      </div>
    </div>
    <div class="form-group row ">
      <label for="total" class="col-sm-3 form-control-label">Total</label>
      <div class="col-sm-1">
        <p align="center"><span style="color:green" id="sum_hc"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:green" id="sum_prot"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:green" id="sum_lip"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:green" id="sum_cal"></span></p>
      </div>
    </div>
    <br>
    <div class="form-group row ">
     <label  class="col-sm-3 form-control-label" align="right">Raciones</label>
        <label  class="col-sm-1 form-control-label" align="center">Desayuno</label>
        <label  class="col-sm-1 form-control-label" align="left">Col. Matutina</label>
        <label  class="col-sm-1 form-control-label" align="left">Comida</label>
        <label  class="col-sm-1 form-control-label" align="left">Col Vespertina</label>
        <label  class="col-sm-2 form-control-label" align="left">Cena</label>
      </tr>
    </div>

    <br>
    <div class="form-group row ">
      <label class="col-sm-2 form-control-label">Leche</label>
      <div class="col-sm-1">
        <p align="center"><span style="color:blue" id="leche1"></span></p>
      </div>
      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="leche2" id="leche2" onkeyup="formulas2(this.value)">
      </div>
      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="leche3" id="leche3" onkeyup="formulas2(this.value)">
      </div>
      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="leche4" id="leche4" onkeyup="formulas2(this.value)">
      </div>
      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="leche5" id="leche5" onkeyup="formulas2(this.value)">
      </div>
      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="leche6" id="leche6" onkeyup="formulas2(this.value)">
      </div>
      <div class="col-sm-2">
        <p><span style="color:blue" id="leche_1"></span></p>
      </div>
    </div>

       <div class="form-group row ">
      <label for="carne" class="col-sm-2 form-control-label">Carne</label>
      <div class="col-sm-1">
        <p align="center"><span style="color:blue" id="carne1"></span></p>
      </div>

       <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="carne2" id="carne2" onkeyup="formulas1(this.value)">
      </div>

       <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="carne3" id="carne3" onkeyup="formulas1(this.value)">
      </div>
       <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="carne4" id="carne4" onkeyup="formulas1(this.value)">
      </div>
       <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="carne5" id="carne5" onkeyup="formulas1(this.value)">
      </div>
       <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="carne6" id="carne6" onkeyup="formulas1(this.value)">
      </div>
      <div class="col-sm-2">
        <p><span style="color:blue" id="carne_1"></span></p>
      </div>
    </div>

    <div class="form-group row ">
      <label for="fruta" class="col-sm-2 form-control-label">Fruta</label>
      <div class="col-sm-1">
        <p align="center"><span style="color:blue" id="fruta1"></span></p>
      </div>

      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="fruta2" id="fruta2" onkeyup="formulas1(this.value)">
      </div>

      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="fruta3" id="fruta3" onkeyup="formulas1(this.value)">
      </div>

      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="fruta4" id="fruta4" onkeyup="formulas1(this.value)">
      </div>

      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="fruta5" id="fruta5" onkeyup="formulas1(this.value)">
      </div>

      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="fruta6" id="fruta6" onkeyup="formulas1(this.value)">
      </div>
      <div class="col-sm-2">
        <p><span style="color:blue" id="fruta_1"></span></p>
      </div>
    </div>

    <div class="form-group row ">
      <label for="vegetales" class="col-sm-2 form-control-label">Vegetales</label>
      <div class="col-sm-1">
        <p align="center"><span style="color:blue" id="vegetales1"></span></p>
      </div>

       <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="veg2" id="vegetales2" onkeyup="formulas1(this.value)">
      </div>

       <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="veg3" id="vegetales3" onkeyup="formulas1(this.value)">
      </div>

       <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="veg4" id="vegetales4" onkeyup="formulas1(this.value)">
      </div>

       <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="veg5" id="vegetales5" onkeyup="formulas1(this.value)">
      </div>

       <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="veg6" id="vegetales6" onkeyup="formulas1(this.value)">
      </div>
      <div class="col-sm-2">
        <p><span style="color:blue" id="vegetales_1"></span></p>
      </div>
    </div>

    <div class="form-group row ">
      <label for="cerytub" class="col-sm-2 form-control-label">Cereales y Tuberculos</label>
      <div class="col-sm-1">
        <p align="center"><span style="color:blue" id="cerytub1"></span></p>
      </div>

      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="cerytub2" id="cerytub2" onkeyup="formulas1(this.value)">
      </div>


      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="cerytub3" id="cerytub3" onkeyup="formulas1(this.value)">
      </div>


      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="cerytub4" id="cerytub4" onkeyup="formulas1(this.value)">
      </div>

      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="cerytub5" id="cerytub5" onkeyup="formulas1(this.value)">
      </div>

      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="cerytub6" id="cerytub6" onkeyup="formulas1(this.value)">
      </div>
      <div class="col-sm-2">
        <p><span style="color:blue" id="cerytub_1"></span></p>
      </div>
    </div>

    <div class="form-group row ">
      <label for="leguminosa" class="col-sm-2 form-control-label">Leguminosa</label>
      <div class="col-sm-1">
        <p align="center"><span style="color:blue" id="leguminosa1"></span></p>
      </div>

      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="leguminosa2" id="leguminosa2" onkeyup="formulas1(this.value)">
      </div>


      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="leguminosa3" id="leguminosa3" onkeyup="formulas1(this.value)">
      </div>

      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="leguminosa4" id="leguminosa4" onkeyup="formulas1(this.value)">
      </div>

      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="leguminosa5" id="leguminosa5" onkeyup="formulas1(this.value)">
      </div>

      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="leguminosa6" d="leguminosa6" onkeyup="formulas1(this.value)">
      </div>
      <div class="col-sm-2">
        <p><span style="color:blue" id="leguminosas_1"></span></p>
      </div>

    </div>

    <div class="form-group row ">
      <label for="grasas" class="col-sm-2 form-control-label">Grasas</label>
      <div class="col-sm-1">
        <p align="center"><span style="color:blue" id="grasas1"></span></p>
      </div>

      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="grasas2" id="grasas2" onkeyup="formulas1(this.value)">
      </div>


      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="grasas3" id="grasas3" onkeyup="formulas1(this.value)">
      </div>

      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="grasas4" id="grasas4" onkeyup="formulas1(this.value)">
      </div>

      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="grasas5" id="grasas5" onkeyup="formulas1(this.value)">
      </div>

      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="grasas6" id="grasas6" onkeyup="formulas1(this.value)">
      </div>
      <div class="col-sm-2">
        <p><span style="color:blue" id="grasas_1"></span></p>
      </div>
    </div>


    <div class="form-group row ">
      <label for="azucar" class="col-sm-2 form-control-label">Azucar</label>
      <div class="col-sm-1">
        <p align="center"><span style="color:blue" id="azucar1"></span></p>
      </div>

        <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="azucar2" id="azucar2" onkeyup="formulas1(this.value)">
      </div>

        <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="azucar3" id="azucar3" onkeyup="formulas1(this.value)">
      </div>

        <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="azucar4" id="azucar4" onkeyup="formulas1(this.value)">
      </div>

        <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="azucar5" id="azucar5" onkeyup="formulas1(this.value)">
      </div>

        <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="azucar6" id="azucar6" onkeyup="formulas1(this.value)">
      </div>
      <div class="col-sm-2">
        <p><span style="color:blue" id="azucar_1"></span></p>
      </div>
    </div>
    <div class="form-group row ">
      <label class="col-sm-3 form-control-label">Total</label>
      <div class="col-sm-1">
        <p align="center"><span style="color:blue" id="suma_des"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:blue" id="suma_col_mat"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:blue" id="suma_comida"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:blue" id="suma_col_ves"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:blue" id="suma_cena"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:blue" id="suma_todo"></span></p>
      </div>
    </div>
    <br><br>

    <div class="form-group row ">
      <label class="col-sm-3 form-control-label" align="right">Porcentaje</label>
      <label class="col-sm-1 form-control-label" align="center">GRS</label>
      <label class="col-sm-2 form-control-label" align="left">Kilo Calorias</label>
    </div>
    <div class="form-group row ">
      <label for="Hidratosdecarbono" class="col-sm-2 form-control-label">Hidratos de Carbono</label>
      <div class="col-sm-1">
        <p align="center"><span style="color:green" id="porc_hc"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:blue" id="grs_hc"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:blue" id="kcal_hc"></span></p>
      </div>
    </div>
      <div class="form-group row ">
      <label for="proteinas" class="col-sm-2 form-control-label">Proteinas</label>
      <div class="col-sm-1">
        <p align="center"><span style="color:green" id="porc_prot"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:blue" id="grs_prot"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:blue" id="kcal_prot"></span></p>
      </div>
    </div>
    <div class="form-group row ">
      <label for="lipidos" class="col-sm-2 form-control-label">Lipidos</label>
      <div class="col-sm-1">
        <p align="center"><span style="color:green" id="porc_lip"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:blue" id="grs_lip"></span></p>
      </div>
      <div class="col-sm-1">
        <p align="center"><span style="color:blue" id="kcal_lip"></span></p>
      </div> 
    </div>
    <div class="col-sm-offset-5 col-sm-10">
      <button type="submit" class="col-sm-2 btn btn-primary" style="background-color: #4CAF50; border: none">
          Generar Reporte
      </button>
    </div>
    <br><br>
  </form>
</div>
@endsection