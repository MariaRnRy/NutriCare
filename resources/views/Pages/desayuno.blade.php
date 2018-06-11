@extends('layouts.app')

@section('content')
<nav>
  <div class="container">
    <ul class="nav nav-tabs nav-justified">
      <li><a>Datos Fisicos</a></li>
      <li><a>Antecedentes</a></li>
      <li class="active"><a>Datos Alimenticios</a></li>
      <li><a>Plan Alimenticio</a></li>
    </ul>
  </div>
</nav>
<br><br>
  <?php include '\xampp\htdocs\imss\resources\views\Pages\ajaxAlim.php';?>
<body>
<div style="overflow: hidden" class="container">
  <form action = "{{ route('guardarDes') }}" method="post">
    {{ csrf_field() }}
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
        <input type="number" min="0" class="form-control" name="leche" id="leche"
        value="0" onkeyup="formulas1(this.value)">
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
        <input type="numer" min="0" class="form-control" name="carne" id="carne"
        value="0" onkeyup="formulas1(this.value)">
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
        <input type="number" min="0" class="form-control" name="fruta" id="fruta"
        value="0" onkeyup="formulas1(this.value)">
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
        <input type="number" min="0" class="form-control" name="vegetales" id="vegetales"
        value="0" onkeyup="formulas1(this.value)">
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
      <label for="cer.y.tub" class="col-sm-2 form-control-label">Cereales y Tuberculos</label>
      <div class="col-sm-1">
        <input type="number" min="0" class="form-control" name="cerytub" id="cerytub"
        value="0" onkeyup="formulas1(this.value)">
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
        <input type="number" min="0" class="form-control" name="leguminosa" id="leguminosa"
        value="0" onkeyup="formulas1(this.value)">
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
        <input type="number" min="0" class="form-control" name="grasas" id="grasas"
        value="0" onkeyup="formulas1(this.value)">
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
        <input type="numer" min="0" class="form-control" name="azucar" id="azucar"
        value="0" onkeyup="formulas1(this.value)">
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
</body>
@endsection