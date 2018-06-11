<!DOCTYPE html>
<html lang="es">
  <head>
    <style>
       strong>p{
           display: inline;
       }
       #dos>strong{
           margin-left: 40px;
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

  </head>

  <body>
    <?php 
      foreach ($paciente as $pac)
      {
        $nacimiento = $pac->f_nacimiento;
        $sexo = $pac->sexo;
      }
      foreach ($historico as $his)
      {
        $peso = $his->peso;
        $altura = $his->estatura;
        $CM = $his->circun_mu;
        $cintura = $his->cintura;
        $cadera = $his->cadera;
        $pesoHab = $his->peso_habitual;
        $PA = $his->PA;
      }
      foreach ($MA as $ma)
      {
        $nombre_ma = $ma->nombre_ma;
        $peso_ma = $ma->peso_ma;
      }
      foreach ($leche as $lh)
      {
        $lech_des = $lh->desayuno;
        $lech_col_mat = $lh->colMat;
        $lech_com = $lh->comida;
        $lech_col_vesp = $lh->colVesp;
        $lech_cena = $lh->cena;
      }
      foreach ($carne as $car)
      {
        $carn_des = $car->desayuno;
        $carn_col_mat = $car->colMat;
        $carn_com = $car->comida;
        $carn_col_vesp = $car->colVesp;
        $carn_cena = $car->cena;
      }
      foreach ($fruta as $fr)
      {
        $frut_des = $fr->desayuno;
        $frut_col_mat = $fr->colMat;
        $frut_com = $fr->comida;
        $frut_col_vesp = $fr->colVesp;
        $frut_cena = $fr->cena;
      }
      foreach ($vege as $vg)
      {
        $veg_des = $vg->desayuno;
        $veg_col_mat = $vg->colMat;
        $veg_com = $vg->comida;
        $veg_col_vesp = $vg->colVesp;
        $veg_cena = $vg->cena;
      }
      foreach ($cyt as $ct)
      {
        $cyt_des = $ct->desayuno;
        $cyt_col_mat = $ct->colMat;
        $cyt_com = $ct->comida;
        $cyt_col_vesp = $ct->colVesp;
        $cyt_cena = $ct->cena;
      }
      foreach ($legu as $lg)
      {
        $leg_des = $lg->desayuno;
        $leg_col_mat = $lg->colMat;
        $leg_com = $lg->comida;
        $leg_col_vesp = $lg->colVesp;
        $leg_cena = $lg->cena;
      }
      foreach ($grasa as $gr)
      {
        $gras_des = $gr->desayuno;
        $gras_col_mat = $gr->colMat;
        $gras_com = $gr->comida;
        $gras_col_vesp = $gr->colVesp;
        $gras_cena = $gr->cena;
      }
      foreach ($azucar as $az)
      {
        $azu_des = $az->desayuno;
        $azu_col_mat = $az->colMat;
        $azu_com = $az->comida;
        $azu_col_vesp = $az->colVesp;
        $azu_cena = $az->cena;
        $fecha = $az->fecha_plan;
      }
      //$fecha = date_create()->format('Y-m-d');
      $hoy = new DateTime($fecha);
      $naci = new DateTime($nacimiento);
      $interval = $hoy->diff($naci);
      $edad = $interval->y;

      $pesoIdeal = $altura*$altura*21.5;
      $imc = $peso/($altura*$altura);
      $z = $cintura/$cadera;
      if ($z <= 0.99) {
        $icc = "Hombre con distribucion de grasa ginecoide"; 
      }
      else
        $icc = "Hombre con distribucion de grasa androide";
  ?>
  <div class="container">
    <img src="\nutricare\logo.jpg" class="img-responsive" alt="logo" align="left" width="85" height="85">
    <div>
      <br><h3><font color="green">
      &nbsp;&nbsp;&nbsp;&nbsp;Plan Alimenticio</font></h3>
    </div>
    
    <hr style = "height: 12px;border: 0;box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);">
  </div> 
<div style="overflow: hidden" class="container">
  <div class="form-group row">
    <form action="{{ route('actualizar') }}" method="post" style="display: inline;">
      {{ csrf_field() }}
      <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
      <button type="submit" class="col-sm-1 btn btn-secondary no-print" style="background-color: white; border: 1px solid #4CAF50; color: green;margin-left:930px;">
          Actualizar
      </button>
    </form>
    <form action="{{ route('index') }}" method="post" style="display: inline;">
      {{ csrf_field() }}
      <button type="submit" class="col-sm-1 btn btn-secondary no-print" style="background-color: white; border: 1px solid #4CAF50; color: green;margin-left:15px;">
          Inicio
      </button>
    </form> 
  </div>
 <form action="{{ route('reporte2B') }}" method="post">
  {{ csrf_field() }}
  <div style="overflow: hidden" class="form-group row">
  <div>
   <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombre: &nbsp;&nbsp;&nbsp;</strong><?php foreach ($paciente as $pac) {echo $pac->nombre;}?>
   <strong style="margin-left: 30%;">NSS: &nbsp;&nbsp;&nbsp;</strong><?php foreach ($paciente as $pac) {echo $pac->nss;}?>
   <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
  </div>
   <div id="dos">
       <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha:&nbsp;&nbsp;&nbsp;</strong><?php echo $fecha;?>
       <strong>Edad:&nbsp;&nbsp;&nbsp;</strong><?php echo $edad;?> años
       <strong>Sexo:&nbsp;&nbsp;&nbsp;</strong><?php echo $sexo;?>
       <strong>Peso Actual:&nbsp;&nbsp;&nbsp;</strong><?php echo $peso;?> kgs
   </div>
   <div id="tres">
       <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Estatura:&nbsp;&nbsp;&nbsp;</strong><?php echo $altura;?> m.
       <strong>Peso Ideal:&nbsp;&nbsp;&nbsp;</strong><?php echo number_format($pesoIdeal, 2, '.', ',');?> kgs
       <strong>IMC:&nbsp;&nbsp;&nbsp;</strong><?php echo number_format($imc, 2, '.', ',');?>
   </div>
   <div id="tres">
      <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ICC:&nbsp;&nbsp;&nbsp;</strong><?php echo $icc;?>
   </div>
   <div id="cuatro">
       <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diagnostico:&nbsp;&nbsp;&nbsp;</strong>DM + HAS
       <strong>Tx Dietetico:&nbsp;&nbsp;&nbsp;</strong><?php echo number_format($pesoIdeal, 2, '.', ',');?> kcals
   </div>
</div>
<div class="form-group row">
  <table border="1" style="width:90%; text-align: center;" align="center" >
    <tr>
      <th style="padding: 5px; text-align: center;">Alimento</th>
      <th style="padding: 5px; text-align: center;">Desayuno</th> 
      <th style="padding: 5px; text-align: center;">Col. Matutina</th>
      <th style="padding: 5px; text-align: center;">Comida</th>
      <th style="padding: 5px; text-align: center;">Col. Vespert</th>
      <th style="padding: 5px; text-align: center;">Cena</th>
    </tr>
    <tr>
      <td>Leche</td>
      <td><?php echo $lech_des;?> Raciones</td> 
      <td><?php echo $lech_col_mat;?> Raciones</td>
      <td><?php echo $lech_com;?> Raciones</td>
      <td><?php echo $lech_col_vesp;?> Raciones</td>
      <td><?php echo $lech_cena;?> Raciones</td>
    </tr>
    <tr>
      <td>Carne</td>
      <td ><?php echo $carn_des;?> Raciones</td> 
      <td ><?php echo $carn_col_mat;?> Raciones</td>
      <td><?php echo $carn_com;?> Raciones</td>
      <td><?php echo $carn_col_vesp;?> Raciones</td>
      <td><?php echo $carn_cena;?> Raciones</td>
    </tr>
    <tr>
      <td>Frutas</td>
      <td><?php echo $frut_des;?> Raciones</td> 
      <td><?php echo $frut_col_mat;?> Raciones</td>
      <td><?php echo $frut_com;?> Raciones</td>
      <td><?php echo $frut_col_vesp;?> Raciones</td>
      <td><?php echo $frut_cena;?> Raciones</td>
    </tr>
    <tr>
      <td>Vegetales</td>
      <td><?php echo $veg_des;?> Raciones</td> 
      <td><?php echo $veg_col_mat;?> Raciones</td>
      <td><?php echo $veg_com;?> Raciones</td>
      <td><?php echo $veg_col_vesp;?> Raciones</td>
      <td><?php echo $veg_cena;?> Raciones</td>
    </tr>
    <tr>
      <td>Pan Y Sust.</td>
      <td><?php echo $cyt_des;?> Raciones</td> 
      <td><?php echo $cyt_col_mat;?> Raciones</td>
      <td><?php echo $cyt_com;?> Raciones</td>
      <td><?php echo $cyt_col_vesp;?> Raciones</td>
      <td><?php echo $cyt_cena;?> Raciones</td>
    </tr>
    <tr>
      <td>Leguminosas</td>
      <td><?php echo $leg_des;?> Raciones</td> 
      <td><?php echo $leg_col_mat;?> Raciones</td>
      <td><?php echo $leg_com;?> Raciones</td>
      <td><?php echo $leg_col_vesp;?> Raciones</td>
      <td><?php echo $leg_cena;?> Raciones</td>
    </tr>
    <tr>
      <td>Grasas</td>
      <td><?php echo $gras_des;?> Raciones</td> 
      <td><?php echo $gras_col_mat;?> Raciones</td>
      <td><?php echo $gras_com;?> Raciones</td>
      <td><?php echo $gras_col_vesp;?> Raciones</td>
      <td><?php echo $gras_cena;?> Raciones</td>
    </tr>
    <tr>
      <td>Azucares</td>
      <td><?php echo $azu_des;?> Raciones</td> 
      <td><?php echo $azu_col_mat;?> Raciones</td>
      <td><?php echo $azu_com;?> Raciones</td>
      <td><?php echo $azu_col_vesp;?> Raciones</td>
      <td><?php echo $azu_cena;?> Raciones</td>
    </tr>
  </table>
</div>
<br>   
<div class="form-group row ">
  <table border="0" style="width:90%" align="center">
    <tr>
      <th><u>GRUPO DE LECHE</u></th>
      <th style="width:50px"></th>
      <th style="width:10px"></th>
      <th><u>GRUPO DE VEGETALES</u></th>

   </tr>
    <tr>
      <td>Leche descremeda o light</td>
      <td style="width:50px">1 taza 200 ml.</td> 
      <td style="width:10px"></td>
      <td>Acelgas</td>
      <td style="width:10px">50 gramos</td>
    </tr>

    <tr>
      <td>Yogurt natural o light</td>
      <td style="width:50px">3/4 taza.</td> 
      <td style="width:10px"></td>
      <td>Col</td>
      <td style="width:10px">1/2 taza</td>
    </tr>


      <tr>
      <td>Queso:Hebra, canela, requeson</td>
      <td style="width:50px">40 gr </td> 
      <td style="width:10px"></td>
      <td>Chayote</td>
      <td style="width:10px">1 pieza</td>
    </tr>


    <tr>
      <td></td>
      <td style="width:50px"></td> 
      <td style="width:10px"></td>
      <td>Chile poblano</td>
      <td style="width:10px">1 pieza</td>
    </tr>

     <tr>
     <th><u>GRUPO DE CARNES</u></th>
      <td style="width:50px"></td> 
      <td style="width:10px"></td>
      <td>Espinaca cocida</td>
      <td style="width:10px">3/4 de taza</td>
    </tr>

       <tr>
      <td>Clara de huevo</td>
      <td style="width:50px">2 piezas</td> 
      <td style="width:10px"></td>
      <td>Espinaca cruda</td>
      <td style="width:10px">2 tazas</td>
    </tr>

      <tr>
      <td>Atún de agua</td>
      <td style="width:50px">30 gramos</td> 
      <td style="width:10px"></td>
      <td>Huazontle</td>
      <td style="width:10px">50 gramos</td>
    </tr>


       <tr>
      <td>Pollo sin piel </td>
      <td style="width:50px">30 gramos</td> 
      <td style="width:10px"></td>
      <td>Jitomate</td>
      <td style="width:10px">1 pieza</td>
    </tr>

       <tr>
      <td>Pescado fresco </td>
      <td style="width:50px">45 gramos</td> 
      <td style="width:10px"></td>
      <td>Pimiento</td>
      <td style="width:10px">1 pieza</td>
    </tr>


      <tr>
      <td>Res magra </td>
      <td style="width:50px">30 gramos</td> 
      <td style="width:10px"></td>
      <td>Zanahoria</td>
      <td style="width:10px">1/2 taza</td>
    </tr>

      <tr>
      <td>Queso panela</td>
      <td style="width:50px">30 gramos</td> 
      <td style="width:10px"></td>
      <td>Calabacita cruda</td>
      <td style="width:10px">1 1/2 taza</td>
    </tr>

       <tr>
      <td>Queso cottage</td>
      <td style="width:50px">30 gramos</td> 
      <td style="width:10px"></td>
      <td>Calaza cocida</td>
      <td style="width:10px">1 taza</td>
    </tr>

     <tr>
       <td>Soya</td>
      <td style="width:50px">30 gramos</td> 
      <td style="width:10px"></td>
      <td>Betabel</td>
      <td style="width:10px">1/4 taza</td>
    </tr>

 
    <tr>
       <th><u>GRUPO DE FRUTAS</u></th>
      <td style="width:50px"></td> 
      <td style="width:10px"></td>
      <td>Chicharo</td>
      <td style="width:10px">3 cucharadas</td>
    </tr>

      <tr>
      <td>Capulines</td>
      <td style="width:50px">1 taza</td> 
      <td style="width:10px"></td>
      <td>Hongos</td>
      <td style="width:10px">3/4 taza</td>
    </tr>


     <tr>
       <td>Ciruela</td>
      <td style="width:50px">2 piezas</td> 
      <td style="width:10px"></td>
      <td>Haba verde</td>
      <td style="width:10px">1/4 taza</td>
    </tr>


      <tr>
     <td>Chabacanos</td>
      <td style="width:50px">4 piezas</td> 
      <td style="width:10px"></td>
      <td>Lechuga</td>
      <td style="width:10px">2 tazas</td>
    </tr>

       <tr>
     <td>Chicozapote</td>
      <td style="width:50px">1/2 pieza</td> 
      <td style="width:10px"></td>
      <td>Apio</td>
      <td style="width:10px">2 tazas</td>
    </tr>

       <tr>
     <td>Durazno</td>
      <td style="width:50px">1 1/2 pieza</td> 
      <td style="width:10px"></td>
      <td>Berro</td>
      <td style="width:10px">2 tazas</td>
    </tr>


       <tr>
     <td>Fresas</td>
      <td style="width:50px">1 taza</td> 
      <td style="width:10px"></td>
      <td>Berenjena</td>
      <td style="width:10px">2 tazas</td>
    </tr>

       <tr>
     <td>Guayaba</td>
      <td style="width:50px">3 medianas</td> 
      <td style="width:10px"></td>
      <td>Ejote</td>
      <td style="width:10px">1 1/2 taza</td>
    </tr>


          <tr>
     <td>Higo fresco</td>
      <td style="width:50px">3 piezas</td> 
      <td style="width:10px"></td>
      <td>Flor de calabaza</td>
      <td style="width:10px">1  taza</td>
    </tr>

            <tr>
     <td>Jicama</td>
      <td style="width:50px">1 taza</td> 
      <td style="width:10px"></td>
      <td>Nopales</td>
      <td style="width:10px">1 taza</td>
    </tr>


             <tr>
     <td>Kiwi</td>
      <td style="width:50px">1 1/2 pieza</td> 
      <td style="width:10px"></td>
      <td>Romeritos</td>
      <td style="width:10px">1 taza</td>
    </tr>


            <tr>
     <td>Sandia</td>
      <td style="width:50px">1 taza</td> 
      <td style="width:10px"></td>
      <td>Verdolaga cocida</td>
      <td style="width:10px">1 taza</td>
    </tr>


            <tr>
     <td>Toronja</td>
      <td style="width:50px">1/2 pieza</td> 
      <td style="width:10px"></td>
      <td>Brocoli cocido</td>
      <td style="width:10px">1 taza</td>
    </tr>

          <tr>
     <td>Tuna</td>
      <td style="width:50px">2 piezas</td> 
      <td style="width:10px"></td>
      <td>Brocoli crudo</td>
      <td style="width:10px">1 taza</td>
    </tr>

        <tr>
     <td>Lima</td>
      <td style="width:50px">3 piezas</td> 
      <td style="width:10px"></td>
      <td>Jicama</td>
      <td style="width:10px">1/2 taza</td>
    </tr>
    
    <tr>
       <td>Mandarina</td>
      <td style="width:50px"> 2 pzas. med.</td> 
      <td style="width:10px"></td>
      <th><u>GRUPO DE CEREALES</u></th>
      <td style="width:10px"></td>
    </tr>

          <tr>
     <td>Mango</td>
      <td style="width:50px">1/2 pieza</td> 
      <td style="width:10px"></td>
      <td>Bolillo</td>
      <td style="width:10px">1/2 pieza</td>
    </tr>

     <tr>
     <td>Manzana</td>
      <td style="width:50px">1 pieza pequeña</td> 
      <td style="width:10px"></td>
      <td>Pan tostado integral</td>
      <td style="width:10px">1 rebanada</td>
    </tr>

      <tr>
     <td>Melon</td>
      <td style="width:50px">1 1/2 taza</td> 
      <td style="width:10px"></td>
      <td>Tortilla de maíz</td>
      <td style="width:10px">1 pieza</td>
    </tr>
    <tr>
      <td>Naranja</td>
      <td style="width:50px">1 pza med.</td> 
      <td style="width:10px"></td>
      <td>Arroz con verduras</td>
      <td style="width:10px">1/2 taza</td>
    </tr>
    <tr>
      <td>Papaya</td>
      <td style="width:50px">1 taza</td> 
      <td style="width:10px"></td>
      <td>Sopa de pasta</td>
      <td style="width:10px">1/2 taza</td>
    </tr>
    <tr>
      <td>Pera</td>
      <td style="width:50px">1 pza peq.</td> 
      <td style="width:10px"></td>
      <td>Avena en hojuelas</td>
      <td style="width:10px">1/3 taza</td>
    </tr>
    <tr>
      <td>Piña</td>
      <td style="width:50px">1 taza</td> 
      <td style="width:10px"></td>
      <td>Cereal integral</td>
      <td style="width:10px">3/4 taza</td>
    </tr>
    <tr>
      <td>Uvas</td>
      <td style="width:50px">10 piezas</td> 
      <td style="width:10px"></td>
      <td>Amaranto</td>
      <td style="width:10px">5 cucharadas</td>
    </tr>
    <tr>
      <td>Zapote</td>
      <td style="width:50px">1 pza peq.</td> 
      <td style="width:10px"></td>
      <td>Pan integral</td>
      <td style="width:10px">1 rebanada</td>
    </tr>
    <tr>
      <th><u>LEGUMINOSAS</u></th>
      <td style="width:50px"> </td> 
      <td style="width:10px"></td>
      <td>Galletas integrales</td>
      <td style="width:10px">6 piezas</td>
    </tr>
    <tr>
      <td>Frijol</td>
      <td style="width:50px">1/2 taza</td> 
      <td style="width:10px"></td>
      <td>Elote entero</td>
      <td style="width:10px">1/2 pieza</td>
    </tr>
    <tr>
      <td>Haba</td>
      <td style="width:50px">1/2 taza</td> 
      <td style="width:10px"></td>
      <td>Papa hervida</td>
      <td style="width:10px">90 gramos</td>
    </tr>
    <tr>
      <td>Lenteja</td>
      <td style="width:50px">1/2 taza</td> 
      <td style="width:10px"></td>
      <td></td>
      <td style="width:10px"></td>
    </tr>
    <tr>
      <td>Garbanzos</td>
      <td style="width:50px">1/2 taza</td> 
      <td style="width:10px"></td>
      <td></td>
      <td style="width:10px"></td>
    </tr>
    <tr>
      <td>Alberjones</td>
      <td style="width:50px">1/2 taza</td> 
      <td style="width:10px"></td>
      <td></td>
      <td style="width:10px"></td>
    </tr>
    <tr>
      <td>Soya</td>
      <td style="width:50px">30 gramos</td> 
      <td style="width:10px"></td>
      <td></td>
      <td style="width:10px"></td>
    </tr>
    <tr>
      <td>Soya hidratada</td>
      <td style="width:50px">1 1/2 taza</td> 
      <td style="width:10px"></td>
      <td></td>
      <td style="width:10px"></td>
    </tr>
    <tr>
      <td>Soya germinada</td>
      <td style="width:50px">1/2 taza</td> 
      <td style="width:10px"></td>
      <td></td>
      <td style="width:10px"></td>
    </tr>
    <tr style="hight:50px" >
      <td></td>
      <td style="width:50px"></td> 
      <td style="width:10px"></td>
      <td></td>
      <td style="width:10px"></td>
    </tr>
    <tr>
      <th><u>GRUPO DE GRASAS</u></th>
      <td style="width:50px"></td> 
      <td style="width:10px"></td>
      <td></td>
      <td style="width:10px"></td>
    </tr>
  </table>

<div class="form-group row ">
<span  style="margin-left: 6%;">Por cada racion de grasa puede consumir 5 gramos o una cucharadita cafetera de:</span ><br>
<span style="margin-left: 6%;">Aceite de maiz, girasol, algodón, cártomo,soya, margarina</span >
</div> 
 <table border="0" style="width:90%" align="center">
    <tr>
      <td>Aguacate</td>
      <td style="width:50px">40 gramos</td>
      <td style="width:10px"></td>
      <th><u></u></th>
    </tr>
    <tr>
      <td>Nueces</td>
      <td style="width:50px">3 piezas.</td> 
      <td style="width:10px"></td>
      <td></td>
      <td style="width:10px"></td>
    </tr>
    <tr>
      <td>Avellanas</td>
      <td style="width:50px">7 piezas</td> 
      <td style="width:10px"></td>
      <td></td>
      <td style="width:10px"></td>
    </tr>
    <tr>
      <td>Almendras</td>
      <td style="width:50px">10 piezas</td> 
      <td style="width:10px"></td>
      <td></td>
      <td style="width:10px"></td>
    </tr>

</table>
</div>  
<br>
<div class="form-group row ">
<label  for="gleche" class="col-sm-2 form-control-label"><u>RECOMENDACIONES</u></label>
</div>  
<div class="form-group row ">
<p class="col-sm-5 form-control-label" >*Debe tener horarios fijos de alimentación.</p>
</div> 
<div class="form-group row ">
<p class="col-sm-5 form-control-label" >*Respete las cantidades de alimentación que se indique en tu receta.</p>
</div> 
<div class="form-group row ">
<p class="col-sm-5 form-control-label" >*Tome mínimo 1.5 litros de agua al día.</p>
</div> 
<div class="form-group row ">
<p class="col-sm-5 form-control-label" >*Coma la fruta y la verdura preferentemente cruda y con cascara.</p>
</div> 
<div class="form-group row ">
<p class="col-sm-5 form-control-label" >*No comer más cantidades de frutas de las indicadas.</p>
</div> 
<div class="form-group row ">
<p class="col-sm-11 form-control-label" >*Si nunca ha realizado ejercicio inicie con 10 minutos de caminata en superficies planas , con calzado comodo y ropa adecuada y aumente progresivamente el tiempo de ejercicio paulatinamente.</p>
</div> 
<div class="form-group row ">
<label  for="gleche" class="col-sm-7 form-control-label" >*ANTES DE REALIZAR CUALQUIER ACTIVIDAD FISICA O EJERCICIO CONSULTE A SU MEDICO.</label>
</div> 
<div class="form-group row ">
<p class="col-sm-6 form-control-label" >*Asar, hervir, al vapor o al horno sus alimentos y evitar freír, capear o empanizar.</p>
</div>
<div class="form-group row">
  <div class="col-sm-offset-10 col-sm-10">
    <button type="submit" class="col-sm-2 btn btn-secondary no-print" style="background-color: white; border: 1px solid #4CAF50; color: green">
        Siguiente
    </button>
  </div>
</div>
</form>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>
