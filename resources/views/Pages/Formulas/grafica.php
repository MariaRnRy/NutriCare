<?php
use Khill\Lavacharts\Lavacharts;

$hc = $_REQUEST["a"];
$prot = $_REQUEST["b"];
$lip = $_REQUEST["c"];

	$des = \Lava::DataTable();

    $des->addStringColumn('Tipo')
        ->addNumberColumn('Porcentaje')
        ->addRow(['H.C.', $hc])
        ->addRow(['Proteinas', $prot])
        ->addRow(['Lipidos', $lip]);

    \Lava::PieChart('IMDB', $des, [
            'title'  => 'Porcentajes',
            'is3D'   => true,
            'slices' => [
                ['offset' => 0.2],
                ['offset' => 0.25],
                ['offset' => 0.25]
        ]
    ]);
       
   //return view('pages.desayuno');
 
    //<?= Lava::render('PieChart', 'IMDB', 'chart-div') ?>

?>