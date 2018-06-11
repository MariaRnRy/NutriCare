<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="\nutricare\logo1.jpg">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <title>NutriCare</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
       strong>p{
           display: inline;
       }
       #dos>strong{
           margin-left: 90px;
       }
       #dos>strong:nth-child(1){
           margin-left: 0px;
       }
       #tres>strong{
           margin-left: 50px;
       }
       #tres>strong:nth-child(1){
           margin-left: 0px;
       }
       #cuatro>strong{
           margin-left: 110px;
       }
       #cuatro>strong:nth-child(1){
           margin-left: 0px;
       }
       td{
           width: 100px;
       }
       @media print {    
        .no-print, .no-print *
        {
          display: none !important;
        }
      }
    </style>
  </head>
  <?php include '\xampp\htdocs\imss\resources\views\Pages\FormulasM\res\formulas.php';?>
  <body>
    <?php
      
      foreach ($paciente as $pac)
      {
        $nacimiento = $pac->f_nacimiento;
        $sexo = $pac->sexo;
        $tel = $pac->telefono;
        $dir = $pac->direccion;
        $ocup = $pac->ocupacion;
      }
      if ($bp != NULL) {
        $bp = 'X';
      }
      else
        $bp = 0;
      if ($cl != NULL) {
        $cl = 'X';
      }
      else
        $cl = 0;
      if ($sp != NULL) {
        $sp = 'X';
      }
      else
        $sp = 0;
      if ($ob != NULL) {
        $ob = 'X';
      }
      else
        $ob = 0;
      if ($dn != NULL) {
        $dn = 'X';
      }
      else
        $dn = 0;
      if ($hp != NULL) {
        $hp = 'X';
      }
      else
        $hp = 0;
      if ($db != NULL) {
        $db = 'X';
      }
      else
        $db = 0;
      if ($cd != NULL) {
        $cd = 'X';
      }
      else
        $cd = 0;
      if ($nf != NULL) {
        $nf = 'X';
      }
      else
        $nf = 0;
      if ($cn != NULL) {
        $cn = 'X';
      }
      else
        $cn = 0;
      if ($gs != NULL) {
        $gs = 'X';
      }
      else
        $gs = 0;
      if ($ah != NULL) {
        $ah = 'X';
      }
      else
        $ah = 0;
      if ($tb != NULL) {
        $tb = 'X';
      }
      else
        $tb = 0;
      if ($alg != NULL) {
        foreach ($alg as $al) {
          $aler = $al->nombre_ant;
        }
      }
      else
        $aler = "";

      for ($i=0; $i < 9; $i++) { 
        for ($j=0; $j < 3; $j++) { 
          $hist[$i][$j] = "";
        }
      }
      $i = 0;
      foreach ($historico as $his)
      {
        //$fecha_hist = $his->fecha_hist;
        $hist[0][$i] = $his->fecha_hist;
        //$peso = $his->peso;
        $hist[1][$i] = $his->peso;
        //$altura = $his->estatura;
        $hist[2][$i] = $his->estatura;
        //$CM = $his->circun_mu;
        $hist[3][$i] = $his->circun_mu;
        //$cintura = $his->cintura;
        $hist[4][$i] = $his->cintura;
        //$cadera = $his->cadera;
        $hist[5][$i] = $his->cadera;
        //$pesoHab = $his->peso_habitual;
        $hist[6][$i] = $his->peso_habitual;
        //$PA = $his->PA;
        $hist[7][$i] = $his->PA;
        //$ejercicio = $his->ejercicio;
        $hist[8][$i] = $his->ejercicio;
        $i++;
      }
      foreach ($MA as $ma)
      {
        $nombre_ma = $ma->nombre_ma;
        $peso_ma = $ma->peso_ma;
      }
      foreach ($desayuno as $desa)
      {
        $des_leche = $desa->leche;
        $des_carne = $desa->carne;
        $des_fruta = $desa->fruta;
        $des_vegetal = $desa->vegetal;
        $des_cyt = $desa->cer_y_tub;
        $des_legu = $desa->leguminosa;
        $des_grasa = $desa->grasa;
        $des_azucar = $desa->azucar;
      }
      $fecha_hist = $hist[0][0];
      for ($i=0; $i < 3; $i++) { 
        if ($hist[0][$i] > $fecha_hist) {
          $fecha_hist = $hist[0][$i];
        }
      }

      $fecha = $fecha_hist;
      $hoy = new DateTime($fecha);
      $naci = new DateTime($nacimiento);
      $interval = $hoy->diff($naci);
      $edad = $interval->y;

      $pesoIdeal1 = $hist[2][0]*$hist[2][0]*21.5;

      if ($hist[2][1] != "") {
        $pesoIdeal2 = $hist[2][1]*$hist[2][1]*21.5;
      }
      else
        $pesoIdeal2 = "";

      if ($hist[2][2] != "") {
        $pesoIdeal3 = $hist[2][2]*$hist[2][2]*21.5;
      }
      else
        $pesoIdeal3 = "";

      $imc1 = $hist[1][0]/($hist[2][0]*$hist[2][0]);

      if ($hist[1][1] != "" && $hist[2][1] != "") {
        $imc2 = $hist[1][1]/($hist[2][1]*$hist[2][1]);
      }
      else
        $imc2 = "";

      if ($hist[1][2] != "" && $hist[2][2] != "") {
        $imc3 = $hist[1][2]/($hist[2][2]*$hist[2][2]);
      }
      else
        $imc3 = "";

      if ($imc1 < 16) {
        $clasif1 = "DESNUTRICION TERCER GRADO";
      }
      elseif (16 <= $imc1 && $imc1 < 17) {
        $clasif1 = "DESNUTRICION SEGUNDO GRADO";
      }
      elseif (17 <= $imc1 && $imc1 < 18.5) {
        $clasif1 = "DESNUTRICION PRIMER GRADO";
      }
      elseif (18.5 <= $imc1 && $imc1 < 25.1) {
        $clasif1 = "PESO NORMAL";
      }
      elseif (25.1 <= $imc1 && $imc1 < 30) {
        $clasif1 = "OBESIDAD PRIMER GRADO";
      }
      elseif (30 <= $imc1 && $imc1 < 40) {
        $clasif1 = "OBESIDAD SEGUNDO GRADO";
      }
      else
        $clasif1 = "OBESIDAD TERCER GRADO";

      if ($imc2 != "") {
        if ($imc2 < 16) {
          $clasif2 = "DESNUTRICION TERCER GRADO";
        }
        elseif (16 <= $imc2 && $imc2 < 17) {
          $clasif2 = "DESNUTRICION SEGUNDO GRADO";
        }
        elseif (17 <= $imc2 && $imc2 < 18.5) {
          $clasif2 = "DESNUTRICION PRIMER GRADO";
        }
        elseif (18.5 <= $imc2 && $imc2 < 25.1) {
          $clasif2 = "PESO NORMAL";
        }
        elseif (25.1 <= $imc2 && $imc2 < 30) {
          $clasif2 = "OBESIDAD PRIMER GRADO";
        }
        elseif (30 <= $imc2 && $imc2 < 40) {
          $clasif2 = "OBESIDAD SEGUNDO GRADO";
        }
        else
          $clasif2 = "OBESIDAD TERCER GRADO";
      } else
        $clasif2 = "";
        
      if ($imc3 != "") {
        if ($imc3 < 16) {
          $clasif3 = "DESNUTRICION TERCER GRADO";
        }
        elseif (16 <= $imc3 && $imc3 < 17) {
          $clasif3 = "DESNUTRICION SEGUNDO GRADO";
        }
        elseif (17 <= $imc3 && $imc3 < 18.5) {
          $clasif3 = "DESNUTRICION PRIMER GRADO";
        }
        elseif (18.5 <= $imc3 && $imc3 < 25.1) {
          $clasif3 = "PESO NORMAL";
        }
        elseif (25.1 <= $imc3 && $imc3 < 30) {
          $clasif3 = "OBESIDAD PRIMER GRADO";
        }
        elseif (30 <= $imc3 && $imc3 < 40) {
          $clasif3 = "OBESIDAD SEGUNDO GRADO";
        }
        else
          $clasif3 = "OBESIDAD TERCER GRADO";
      } else
        $clasif3 = "";


      $z1 = $hist[4][0]/$hist[5][0];

      if ($hist[4][1] != "" && $hist[5][1] != "") {
        $z2 = $hist[4][1]/$hist[5][1];
      }
      else
        $z2 = "";

      if ($hist[4][2] != "" && $hist[5][2] != "") {
        $z3 = $hist[4][2]/$hist[5][2];
      }
      else
        $z3 = "";

      if ($hist[8][2] != "") {
        $ejer = $hist[8][2];
      }
      elseif ($hist[8][1] != "") {
        $ejer = $hist[8][1];
      }
      else
        $ejer = $hist[8][0];
  ?>
    
  <div class="container">
    <img src="\nutricare\logo.jpg" class="img-responsive" alt="logo" align="left" width="85" height="85">
    <div>
      <br><h3><font color="green">
      &nbsp;&nbsp;&nbsp;&nbsp;Expediente</font></h3>
    </div>
    
    <hr style = "height: 12px;border: 0;box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);">
  </div>  

<div style="overflow: hidden" class="container">
  <div class="form-group row">
    <form action="{{ route('index') }}" method="post" style="display: inline;">
      {{ csrf_field() }}
      <button type="submit" class="col-sm-1 btn btn-secondary no-print" style="background-color: white; border: 1px solid #4CAF50; color: green;margin-left:1000px;">
          Inicio
      </button>
    </form> 
  </div> 
<form action="{{ route('reporte1') }}" method="post">
  {{ csrf_field() }}
  <div>
   <strong>Nombre: &nbsp;&nbsp;&nbsp;</strong><?php foreach ($paciente as $pac) {echo $pac->nombre;}?>
   <strong style="margin-left: 10%;">Fecha: &nbsp;&nbsp;&nbsp;</strong><?php echo $fecha;?>
   <strong style="margin-left: 10%;">NSS: &nbsp;&nbsp;&nbsp;</strong><?php foreach ($paciente as $pac) {echo $pac->nss;}?>
   <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
  </div>
  <br>
  <div class="form-group row ">
     <h3>Datos del paciente</h3>
  </div>
  <div id="dos">
     <strong>Edad:&nbsp;&nbsp;&nbsp;</strong><?php echo $edad;?> años
     <strong>Sexo:&nbsp;&nbsp;&nbsp;</strong><?php echo $sexo;?>
     <strong>Ocupacion:&nbsp;&nbsp;&nbsp;</strong><?php echo $ocup;?>
  </div>
  <div id="dos">
     <strong>Telefono:&nbsp;&nbsp;&nbsp;</strong><?php echo $tel;?>
     <strong>Dirección:&nbsp;&nbsp;&nbsp;</strong><?php echo $dir;?>
  </div>
  <br>
  <div>
     <strong>Factores que intervienen</strong>
  </div>
  <div>
     <strong style="margin-left: 5%;">Ejercicio: &nbsp;&nbsp;</strong><?php echo $ejer;?>
  </div>
  <br>
  <div class="form-group row ">
    <label for="Antecedentes" class="col-sm-2 form-control-label">ANTECEDENTES</label>
  </div>
  <div style="margin-left:">
    <table border="0" style="width:80%">
      <tr>
        <th style="padding: 5px;">Nutricionales</th>
        <th style="width:50px"></th>
        <th style="padding: 5px;">Patologicos</th>
        <th style="width:50px"></th>
        <th style="padding: 5px;">Hereditarios</th>
        <th style="width:50px"></th>
        <th style="padding: 5px;">Otros</th>
      </tr>
      <tr>
        <td>Bajo Peso</td>
        <td style="width:50px"><b><?php echo $bp;?></b></td> 
        <td>Hipertension</td>
        <td style="width:50px"><b><?php echo $hp;?></b></td>
        <td>Cancer</td>
        <td style="width:50px"><b><?php echo $cn;?></b></td>
        <td>Alcoholismo</td>
        <td style="width:50px"><b><?php echo $ah;?></b></td>
      </tr>
      <tr>
        <td >Sobrepeso</td>
        <td style="width:50px"><b><?php echo $sp;?></b></td> 
        <td>Diabetes</td>
        <td style="width:50px"><b><?php echo $db;?></b></td>
        <td>Gastritis</td>
        <td style="width:50px"><b><?php echo $gs;?></b></td>
        <td>Tabaquismo</td>
        <td style="width:50px"><b><?php echo $tb;?></b></td>
      </tr>
      <tr>
        <td>Desnutricion</td>
        <td style="width:50px"><b><?php echo $dn;?></b></td> 
        <td>Cardiopatias</td>
        <td style="width:50px"><b><?php echo $cd;?></b></td>
        <td>Colitis</td>
        <td style="width:50px"><b><?php echo $cl;?></b></td>
        <td style="padding: 5px;"><b>Alergias<b></td>
        <td style="width:50px"></td>
      </tr>
      <tr>
        <td>Obesidad</td>
        <td style="width:50px"><b><?php echo $ob;?></b></td> 
        <td>Nefropatias</td>
        <td style="width:50px"><b><?php echo $nf;?></b></td>
        <td></td>
        <td style="width:50px"><b></b></td>
        <td style="padding: 5px;"><?php echo $aler;?></td>
        <td style="width:50px"></td>
      </tr>
    </table>
  </div>
  <br><br>
  <div class="form-group row ">
    <label for="Cdia" class="col-sm-5 form-control-label">CANTIDAD DIARIA DE INGESTA DE ALIMENTOS</label>
  </div>
  <div class="form-group row" style="margin-left: 5px">
    <table border="1" style="width:70%; text-align: center;">
      <tr>
        <th style="padding: 5px; text-align: center;"></th>
        <th style="padding: 5px; text-align: center;">Leche</th> 
        <th style="padding: 5px; text-align: center;">Carne</th>
        <th style="padding: 5px; text-align: center;">Fruta</th>
        <th style="padding: 5px; text-align: center;">Vegetales</th>
        <th style="padding: 5px; text-align: center;">Cereales</th>
        <th style="padding: 5px; text-align: center;">Legumbres</th>
        <th style="padding: 5px; text-align: center;">Grasas</th>
        <th style="padding: 5px; text-align: center;">Azucar</th>
      </tr>
      <tr>
        <td>RACIONES</td>
        <td><?php echo $des_leche;?></td> 
        <td><?php echo $des_carne;?></td>
        <td><?php echo $des_fruta;?></td>
        <td><?php echo $des_vegetal;?></td>
        <td><?php echo $des_cyt;?></td>
        <td><?php echo $des_legu;?></td>
        <td><?php echo $des_grasa;?></td>
        <td><?php echo $des_azucar;?></td>
      </tr>
    </table>
  </div>
  <br><br>
  <div class="form-group row ">
    <label for="Perfil" class="col-sm-3 form-control-label">PERFIL ANTROPOMETRICO</label>
  </div>
  <div style="margin-left:5px">
    <table border="0" style="width:60%">
      <tr>
        <th style="padding: 5px; width:10px"></th>
        <th style="padding: 5px;">Valor Inicial</th>
        <th style="padding: 5px;">Monitoreo 1</th>
        <th style="padding: 5px;">Monitoreo 2</th>
      </tr>
      <tr>
        <td style="padding: 5px; width:10px"><b>Fecha</b></td>
        <td><?php echo $hist[0][0];?></td> 
        <td><?php echo $hist[0][1];?></td>
        <td><?php echo $hist[0][2];?></td>
      </tr>
      <tr>
        <td style="padding: 5px; width:10px"><b>P.A</b></td>
        <td><?php echo $hist[1][0];?></td> 
        <td><?php echo $hist[1][1];?></td>
        <td><?php echo $hist[1][2];?></td> 
      </tr>
      <tr>
        <td style="padding: 5px; width:10px"><b>P.H</b></td>
        <td><?php echo $hist[6][0];?></td> 
        <td><?php echo $hist[6][1];?></td> 
        <td><?php echo $hist[6][2];?></td> 
      </tr>
      <tr>
        <td style="padding: 5px; width:10px"><b>P.I</b></td>
        <td><?php echo number_format($pesoIdeal1, 2, '.', ',');?></td> 
        <td><?php if($pesoIdeal2 != ""){echo number_format($pesoIdeal2, 2, '.', ',');} else{echo "";}?></td>
        <td><?php if($pesoIdeal3 != ""){echo number_format($pesoIdeal3, 2, '.', ',');} else{echo "";}?></td>
      </tr>
      <tr>
        <td style="padding: 5px; width:10px"><b>P.R</b></td>
        <td><?php pesoInfe($hist[2][0])?></td> 
        <td><?php if($hist[2][1] != ""){pesoInfe($hist[2][1]);} else{echo "";}?></td>
        <td><?php if($hist[2][2] != ""){pesoInfe($hist[2][2]);} else{echo "";}?></td>
      </tr>
      <tr>
        <td style="padding: 5px; width:10px"><b>Estatura</b></td>
        <td><?php echo $hist[2][0];?></td>
        <td><?php echo $hist[2][1];?></td>
        <td><?php echo $hist[2][2];?></td>
      </tr>
      <tr>
        <td style="padding: 5px; width:10px"><b>IMC</b></td>
        <td><?php imc($hist[1][0], $hist[2][0])?></td>
        <td><?php if($hist[1][1] != "" && $hist[2][1] != ""){imc($hist[1][1], $hist[2][1]);} else{echo "";}?></td>
        <td><?php if($hist[1][2] != "" && $hist[2][2] != ""){imc($hist[1][2], $hist[2][2]);} else{echo "";}?></td>
      </tr>
      <tr>
        <td style="padding: 5px; width:10px"><b>ICC</b></td>
        <td><?php echo number_format($z1, 2, '.', ',');?></td>
        <td><?php if($z2 != ""){echo number_format($z2, 2, '.', ',');} else{echo "";}?></td>
        <td><?php if($z3 != ""){echo number_format($z3, 2, '.', ',');} else{echo "";}?></td>
      </tr>
      <tr>
        <td style="padding: 5px; width:10px"><b>COMPLEX</b></td>
        <td><?php echo $clasif1;?></td>
        <td><?php echo $clasif2;?></td>
        <td><?php echo $clasif3;?></td>
      </tr>
    </table>
  </div>
  <br>
  <div style="margin-left:5px">
    <table border="1" style="width:90%">
      <tr>
        <th style="padding: 5px;">Valoraciones</th>
      </tr>
      <tr>
        <td style="height:350px"></td>
      </tr>
    </table>
  </div>
  <br>
  <div>
   <strong>Elaboro: &nbsp;&nbsp;&nbsp;</strong>{{ Auth::user()->name }}
  </div>
  <br><br>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="col-sm-2 btn btn-secondary no-print" style="background-color: white; border: 1px solid #4CAF50; color: green">
        Anterior
    </button>
    </div>
  </div>
  </form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>