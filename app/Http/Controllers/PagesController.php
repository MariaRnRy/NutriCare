<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\datosGenerales;
use App\buscar;
use App\historico_dg;
use App\miembrosAmputados;
use App\antecedentes;
use App\datosAlimenticios;
use App\planAlimenticio;
use Illuminate\Support\Facades\Input;
use Khill\Lavacharts\Lavacharts;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function nuevo(){
        $busqueda = ['nombre' => Input::get('nombre'),
                    'nss' => Input::get('nss')];
        $existe = DB::table('datosgenerales')->select('id_dg')->where($busqueda)->first();
        if($existe != NULL)
        {
            session()->flash('alert-warning', 'El Nombre y NSS ingresados ya estan registrados.');
            return redirect()->back();
        }
        else
        {
            $id = DB::table('datosgenerales')->insertGetId(
                        ['nombre' => Input::get('nombre'),
                        'nss' => Input::get('nss'),
                        'f_nacimiento' => Input::get('fecha_naci'),
                        'sexo' => Input::get('sexo'),
                        'ocupacion' => Input::get('ocupacion'),
                        'telefono' => Input::get('telefono'),
                        'direccion' => Input::get('direccion')]
                    );
            $datos = DB::table('datosgenerales')->where('id_dg', $id)->get();
            return view('Pages.datosMas')->with('datos', $datos)->with('id',$id);
        }
    }

    public function actualizar(){
        $id = Input::get('id');
        $datos = DB::table('datosgenerales')->where('id_dg',$id)->get();
        return view('Pages.datosFem')->with('datos', $datos)->with('id',$id);
    }

    public function buscar(){
        $busqueda = ['nombre' => Input::get('nombre'),
                    'nss' => Input::get('nss')];
        $id = DB::table('datosgenerales')->where($busqueda)->first();
        if($id != NULL)
        {
            $data = DB::table('datosgenerales')->where($busqueda)->get();
            foreach ($data as $dt) {
                $id = $dt->id_dg;
            }
            $paciente = DB::table('datosgenerales')->where('id_dg',$id)->get();
            $historico = DB::table('datosfisicos')->where('id_dg',$id)->orderBy('fecha_hist','desc')->limit(1)->get();
            $MA = DB::table('miembrosamputados')->where('id_dg',$id)->get();

            $leche = DB::table('planalimenticio')->where([
                ['id_dg','=',$id],
                ['alimento','=','Leche'],
                ])->orderBy('fecha_plan','desc')->limit(1)->get();
            $carne = DB::table('planalimenticio')->where([
                ['id_dg','=',$id],
                ['alimento','=','Carne'],
                ])->orderBy('fecha_plan','desc')->limit(1)->get();
            $fruta = DB::table('planalimenticio')->where([
                ['id_dg','=',$id],
                ['alimento','=','Fruta'],
                ])->orderBy('fecha_plan','desc')->limit(1)->get();
            $vege = DB::table('planalimenticio')->where([
                ['id_dg','=',$id],
                ['alimento','=','Vegetales'],
                ])->orderBy('fecha_plan','desc')->limit(1)->get();
            $cyt = DB::table('planalimenticio')->where([
                ['id_dg','=',$id],
                ['alimento','=','Cereales y Tuberculos'],
                ])->orderBy('fecha_plan','desc')->limit(1)->get();
            $legu = DB::table('planalimenticio')->where([
                ['id_dg','=',$id],
                ['alimento','=','Leguminosa'],
                ])->orderBy('fecha_plan','desc')->limit(1)->get();
            $grasa = DB::table('planalimenticio')->where([
                ['id_dg','=',$id],
                ['alimento','=','Grasas'],
                ])->orderBy('fecha_plan','desc')->limit(1)->get();
            $azucar = DB::table('planalimenticio')->where([
                ['id_dg','=',$id],
                ['alimento','=','Azucar'],
                ])->orderBy('fecha_plan','desc')->limit(1)->get();
            return view('Pages.AlimentacionB')->with('paciente', $paciente)
            ->with('historico', $historico)
            ->with('MA', $MA)
            ->with('id', $id)
            ->with('leche',$leche)->with('carne',$carne)->with('fruta',$fruta)->with('vege',$vege)
            ->with('cyt',$cyt)->with('legu',$legu)->with('grasa',$grasa)->with('azucar',$azucar);
        }
        else{
            session()->flash('alert-warning', 'No existe información del paciente.');
            return redirect()->back();
        }
    }

    public function nuevoUsuario(){
        
        nuevoUsuario::create(array(
                'nombre' => Input::get('nombre'),
                'usuario' => Input::get('usuario'),
                'pass' => bcrypt(Input::get('pass'))
            ));
        return view('Pages.exitoRegistro');
    }

    public function Baja(){
        
            DB::table('empleados')->where('nombre',Input::get('nombre'))->delete();
            return view('Pages.exitoBaja');
    }

    public function guardar(){
        $fecha = date_create()->format('Y-m-d');
        $datos = DB::table('datosgenerales')->where('id_dg', Input::get('id'))->get();
        $id = Input::get('id');
        historico_dg::create(array(
                'peso' => Input::get('peso'),
                'peso_habitual' => Input::get('peso_hab'),
                'estatura' => Input::get('estatura'),
                'cintura' => Input::get('cintura'),
                'cadera' => Input::get('cadera'),
                'PA' => Input::get('peri_abd'),
                'circun_mu' => Input::get('circun_mu'),
                'ejercicio' => Input::get('ejercicio'),
                'fecha_hist' => $fecha,
                'id_dg' => $id,
            ));
        if(Input::get('miembrosAp') != 'Seleccionar')
        {
            list($peso, $nombreM) = explode("_", Input::get('miembrosAp'));
            miembrosAmputados::create(array(
                    'nombre_ma' => $nombreM,
                    'peso_ma' =>$peso,
                    'fecha_ma' => $fecha,
                    'id_dg' => $id,
                    
                ));
        }
        return view('Pages.ahf')->with('datos', $datos)->with('id',$id);
    }

    public function guardarAct(){
        $id = Input::get('id');
        $fecha = date_create()->format('Y-m-d');

        historico_dg::create(array(
                'peso' => Input::get('peso'),
                'peso_habitual' => Input::get('peso_hab'),
                'estatura' => Input::get('estatura'),
                'cintura' => Input::get('cintura'),
                'cadera' => Input::get('cadera'),
                'PA' => Input::get('peri_abd'),
                'circun_mu' => Input::get('circun_mu'),
                'ejercicio' => Input::get('ejercicio'),
                'fecha_hist' => $fecha,
                'id_dg' => $id,
            ));

        $datos = DB::table('datosfisicos')->where('id_dg',$id)->orderBy('fecha_hist','desc')->limit(1)->get();
        $paciente = DB::table('datosgenerales')->where('id_dg',$id)->get();

        return view('Pages.planAlim2')->with('datos', $datos)->with('paciente', $paciente)->with('id',$id);
    }

    public function guardarAnt(){
        $datos = DB::table('datosgenerales')->where('id_dg', Input::get('id'))->get();
        $id = Input::get('id');
        $fecha = date_create()->format('Y-m-d');
        if (Input::get('bajoPeso') == 'si') {
            antecedentes::create(array(
                    'nombre_ant' => 'Bajo Peso',
                    'tipo' => 'Nutricionales',
                    'id_dg' => $id,
                    'fecha_ant' => $fecha,
                ));
        }   
        if (Input::get('sobrePeso') == 'si')
        {
            antecedentes::create(array(
                    'nombre_ant' => 'Sobre Peso',
                    'tipo' => 'Nutricionales',
                    'id_dg' => $id,
                    'fecha_ant' => $fecha,
                ));
        }
        if (Input::get('desnutricion') == 'si')
        {
            antecedentes::create(array(
                    'nombre_ant' => 'Desnutricion',
                    'tipo' => 'Nutricionales',
                    'id_dg' => $id,
                    'fecha_ant' => $fecha,
                ));
        }
        if (Input::get('obecidad') == 'si')
        {
            antecedentes::create(array(
                    'nombre_ant' => 'Obecidad',
                    'tipo' => 'Nutricionales',
                    'id_dg' => $id,
                    'fecha_ant' => $fecha,
                ));
        }
        if (Input::get('hipertencion') == 'si')
        {
            antecedentes::create(array(
                    'nombre_ant' => 'Hipertencion',
                    'tipo' => 'Patologicos',
                    'id_dg' => $id,
                    'fecha_ant' => $fecha,
                ));
        }
        if (Input::get('diabetes') == 'si')
        {
            antecedentes::create(array(
                    'nombre_ant' => 'Diabetes',
                    'tipo' => 'Patologicos',
                    'id_dg' => $id,
                    'fecha_ant' => $fecha,
                ));
        }
        if (Input::get('cardiopatias') == 'si')
        {
            antecedentes::create(array(
                    'nombre_ant' => 'Cardiopatias',
                    'tipo' => 'Patologicos',
                    'id_dg' => $id,
                    'fecha_ant' => $fecha,
                ));
        }
        if (Input::get('nefropatias') == 'si')
        {
            antecedentes::create(array(
                    'nombre_ant' => 'Nefropatias',
                    'tipo' => 'Patologicos',
                    'id_dg' => $id,
                    'fecha_ant' => $fecha,
                ));
        }
        if (Input::get('cancer') == 'si')
        {
            antecedentes::create(array(
                    'nombre_ant' => 'Cancer',
                    'tipo' => 'Hereditarios',
                    'id_dg' => $id,
                    'fecha_ant' => $fecha,
                ));
        }
        if (Input::get('gastritis') == 'si')
        {
            antecedentes::create(array(
                    'nombre_ant' => 'Gastritis',
                    'tipo' => 'Hereditarios',
                    'id_dg' => $id,
                    'fecha_ant' => $fecha,
                ));
        }
        if (Input::get('colitis') == 'si')
        {
            antecedentes::create(array(
                    'nombre_ant' => 'Colitis',
                    'tipo' => 'Hereditarios',
                    'id_dg' => $id,
                    'fecha_ant' => $fecha,
                ));
        }
        if (Input::get('alcoholismo') == 'si')
        {
            antecedentes::create(array(
                    'nombre_ant' => 'Alcoholismo',
                    'tipo' => 'Otros',
                    'id_dg' => $id,
                    'fecha_ant' => $fecha,
                ));
        }
        if (Input::get('tabaquismo') == 'si')
        {
            antecedentes::create(array(
                    'nombre_ant' => 'Tabaquismo',
                    'tipo' => 'Otros',
                    'id_dg' => $id,
                    'fecha_ant' => $fecha,
                ));
        }
        if (Input::get('alergias') != '')
        {
            antecedentes::create(array(
                    'nombre_ant' => Input::get('alergias'),
                    'tipo' => 'Alergias',
                    'id_dg' => $id,
                    'fecha_ant' => $fecha,
                ));
        }
        return view('Pages.desayuno')->with('datos', $datos)->with('id',$id);
    }

    public function guardarDes(){
        $id = Input::get('id');
        $fecha = date_create()->format('Y-m-d');
        $datos = DB::table('datosfisicos')->where('id_dg',$id)->orderBy('fecha_hist','desc')->limit(1)->get();
        $paciente = DB::table('datosgenerales')->where('id_dg',$id)->get();
        datosAlimenticios::create(array(
                'leche' => Input::get('leche'),
                'carne' => Input::get('carne'),
                'fruta' => Input::get('fruta'),
                'vegetal' => Input::get('vegetales'),
                'cer_y_tub' => Input::get('cerytub'),
                'leguminosa' => Input::get('leguminosa'),
                'grasa' => Input::get('grasas'),
                'azucar' => Input::get('azucar'),
                'id_dg' => $id,
            ));
        return view('Pages.planAlim')->with('datos', $datos)->with('paciente', $paciente)->with('id',$id);
        
    }

    public function reporte2()
    {
        $id_dg = Input::get('id');
        $paciente = DB::table('datosgenerales')->where('id_dg',$id_dg)->get();
        //$historico = DB::table('datosfisicos')->where('id_dg',$id_dg)->orderBy('fecha_hist','desc')->limit(1)->get();
        $historico = DB::table('datosfisicos')->where('id_dg',$id_dg)->get();
        $MA = DB::table('miembrosamputados')->where('id_dg',$id_dg)->get();

        $desayuno = DB::table('datosalimenticios')->where('id_dg',$id_dg)->get();

        $bp = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['nombre_ant','=','Bajo Peso'],
            ])->first();

        $sp = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['nombre_ant','=','Sobre Peso'],
            ])->first();
        $dn = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['nombre_ant','=','Desnutricion'],
            ])->first();
        $ob = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['nombre_ant','=','Obecidad'],
            ])->first();
        $hp = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['nombre_ant','=','Hipertencion'],
            ])->first();
        $db = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['nombre_ant','=','Diabetes'],
            ])->first();
        $cd = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['nombre_ant','=','Cardiopatias'],
            ])->first();
        $nf = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['nombre_ant','=','Nefropatias'],
            ])->first();
        $cn = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['nombre_ant','=','Cancer'],
            ])->first();
        $gs = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['nombre_ant','=','Gastritis'],
            ])->first();
        $cl = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['nombre_ant','=','Colitis'],
            ])->first();
        $ah = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['nombre_ant','=','Alcoholismo'],
            ])->first();
        $tb = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['nombre_ant','=','Tabaquismo'],
            ])->first();
        $alg = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['tipo','=','Alergias'],
            ])->first();
        if ($alg != NULL) {
            $alg = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['tipo','=','Alergias'],
            ])->get();
        }

        return view('Pages.Resumen')->with('paciente', $paciente)
        ->with('historico', $historico)
        ->with('MA', $MA)
        ->with('id_dg', $id_dg)
        ->with('bp', $bp)->with('sp', $sp)->with('ob', $ob)->with('dn', $dn)->with('hp', $hp)
        ->with('db', $db)->with('cd', $cd)->with('nf', $nf)->with('cn', $cn)->with('gs', $gs)
        ->with('cl', $cl)->with('ah', $ah)->with('tb', $tb)->with('alg', $alg)
        ->with('desayuno',$desayuno)
        ->with('id', $id_dg);
    }

    public function reporte2B()
    {
        $id_dg = Input::get('id');
        $paciente = DB::table('datosgenerales')->where('id_dg',$id_dg)->get();
        //$historico = DB::table('datosfisicos')->where('id_dg',$id_dg)->orderBy('fecha_hist','desc')->limit(1)->get();
        $historico = DB::table('datosfisicos')->where('id_dg',$id_dg)->get();
        $MA = DB::table('miembrosamputados')->where('id_dg',$id_dg)->get();

        $desayuno = DB::table('datosalimenticios')->where('id_dg',$id_dg)->get();

        $bp = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['nombre_ant','=','Bajo Peso'],
            ])->first();

        $sp = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['nombre_ant','=','Sobre Peso'],
            ])->first();
        $dn = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['nombre_ant','=','Desnutricion'],
            ])->first();
        $ob = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['nombre_ant','=','Obecidad'],
            ])->first();
        $hp = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['nombre_ant','=','Hipertencion'],
            ])->first();
        $db = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['nombre_ant','=','Diabetes'],
            ])->first();
        $cd = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['nombre_ant','=','Cardiopatias'],
            ])->first();
        $nf = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['nombre_ant','=','Nefropatias'],
            ])->first();
        $cn = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['nombre_ant','=','Cancer'],
            ])->first();
        $gs = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['nombre_ant','=','Gastritis'],
            ])->first();
        $cl = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['nombre_ant','=','Colitis'],
            ])->first();
        $ah = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['nombre_ant','=','Alcoholismo'],
            ])->first();
        $tb = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['nombre_ant','=','Tabaquismo'],
            ])->first();
        $alg = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['tipo','=','Alergias'],
            ])->first();
        if ($alg != NULL) {
            $alg = DB::table('antecedentes')->where([
            ['id_dg','=',$id_dg],
            ['tipo','=','Alergias'],
            ])->get();
        }

        return view('Pages.ResumenB')->with('paciente', $paciente)
        ->with('historico', $historico)
        ->with('MA', $MA)
        ->with('id_dg', $id_dg)
        ->with('bp', $bp)->with('sp', $sp)->with('ob', $ob)->with('dn', $dn)->with('hp', $hp)
        ->with('db', $db)->with('cd', $cd)->with('nf', $nf)->with('cn', $cn)->with('gs', $gs)
        ->with('cl', $cl)->with('ah', $ah)->with('tb', $tb)->with('alg', $alg)
        ->with('desayuno',$desayuno)
        ->with('id', $id_dg);
    }

    public function reporte1()
    {
        $id = Input::get('id');
        $paciente = DB::table('datosgenerales')->where('id_dg',$id)->get();
        $historico = DB::table('datosfisicos')->where('id_dg',$id)->orderBy('fecha_hist','desc')->limit(1)->get();
        $MA = DB::table('miembrosamputados')->where('id_dg',$id)->get();

        $leche = DB::table('planalimenticio')->where([
            ['id_dg','=',$id],
            ['alimento','=','Leche'],
            ])->orderBy('fecha_plan','desc')->limit(1)->get();
        $carne = DB::table('planalimenticio')->where([
            ['id_dg','=',$id],
            ['alimento','=','Carne'],
            ])->orderBy('fecha_plan','desc')->limit(1)->get();
        $fruta = DB::table('planalimenticio')->where([
            ['id_dg','=',$id],
            ['alimento','=','Fruta'],
            ])->orderBy('fecha_plan','desc')->limit(1)->get();
        $vege = DB::table('planalimenticio')->where([
            ['id_dg','=',$id],
            ['alimento','=','Vegetales'],
            ])->orderBy('fecha_plan','desc')->limit(1)->get();
        $cyt = DB::table('planalimenticio')->where([
            ['id_dg','=',$id],
            ['alimento','=','Cereales y Tuberculos'],
            ])->orderBy('fecha_plan','desc')->limit(1)->get();
        $legu = DB::table('planalimenticio')->where([
            ['id_dg','=',$id],
            ['alimento','=','Leguminosa'],
            ])->orderBy('fecha_plan','desc')->limit(1)->get();
        $grasa = DB::table('planalimenticio')->where([
            ['id_dg','=',$id],
            ['alimento','=','Grasas'],
            ])->orderBy('fecha_plan','desc')->limit(1)->get();
        $azucar = DB::table('planalimenticio')->where([
            ['id_dg','=',$id],
            ['alimento','=','Azucar'],
            ])->orderBy('fecha_plan','desc')->limit(1)->get();
        return view('Pages.Alimentacion')->with('paciente', $paciente)
        ->with('historico', $historico)
        ->with('MA', $MA)
        ->with('id', $id)
        ->with('leche',$leche)->with('carne',$carne)->with('fruta',$fruta)->with('vege',$vege)
        ->with('cyt',$cyt)->with('legu',$legu)->with('grasa',$grasa)->with('azucar',$azucar);
    }

    public function reporte1B()
    {
        $id = Input::get('id');
        $paciente = DB::table('datosgenerales')->where('id_dg',$id)->get();
        $historico = DB::table('datosfisicos')->where('id_dg',$id)->orderBy('fecha_hist','desc')->limit(1)->get();
        $MA = DB::table('miembrosamputados')->where('id_dg',$id)->get();

        $leche = DB::table('planalimenticio')->where([
            ['id_dg','=',$id],
            ['alimento','=','Leche'],
            ])->orderBy('fecha_plan','desc')->limit(1)->get();
        $carne = DB::table('planalimenticio')->where([
            ['id_dg','=',$id],
            ['alimento','=','Carne'],
            ])->orderBy('fecha_plan','desc')->limit(1)->get();
        $fruta = DB::table('planalimenticio')->where([
            ['id_dg','=',$id],
            ['alimento','=','Fruta'],
            ])->orderBy('fecha_plan','desc')->limit(1)->get();
        $vege = DB::table('planalimenticio')->where([
            ['id_dg','=',$id],
            ['alimento','=','Vegetales'],
            ])->orderBy('fecha_plan','desc')->limit(1)->get();
        $cyt = DB::table('planalimenticio')->where([
            ['id_dg','=',$id],
            ['alimento','=','Cereales y Tuberculos'],
            ])->orderBy('fecha_plan','desc')->limit(1)->get();
        $legu = DB::table('planalimenticio')->where([
            ['id_dg','=',$id],
            ['alimento','=','Leguminosa'],
            ])->orderBy('fecha_plan','desc')->limit(1)->get();
        $grasa = DB::table('planalimenticio')->where([
            ['id_dg','=',$id],
            ['alimento','=','Grasas'],
            ])->orderBy('fecha_plan','desc')->limit(1)->get();
        $azucar = DB::table('planalimenticio')->where([
            ['id_dg','=',$id],
            ['alimento','=','Azucar'],
            ])->orderBy('fecha_plan','desc')->limit(1)->get();
        return view('Pages.AlimentacionB')->with('paciente', $paciente)
        ->with('historico', $historico)
        ->with('MA', $MA)
        ->with('id', $id)
        ->with('leche',$leche)->with('carne',$carne)->with('fruta',$fruta)->with('vege',$vege)
        ->with('cyt',$cyt)->with('legu',$legu)->with('grasa',$grasa)->with('azucar',$azucar);
    }

    public function guardarPlan(){
        $id = Input::get('id');
        $fecha = date_create()->format('Y-m-d');
        planAlimenticio::create(array(
                'alimento' => "Leche",
                'desayuno' => Input::get('leche2'),
                'colMat' => Input::get('leche3'),
                'comida' => Input::get('leche4'),
                'colVesp' => Input::get('leche5'),
                'cena' => Input::get('leche6'),
                'fecha_plan' => $fecha,
                'id_dg' => $id,
                ));
        planAlimenticio::create(array(
                'alimento' => "Carne",
                'desayuno' => Input::get('carne2'),
                'colMat' => Input::get('carne3'),
                'comida' => Input::get('carne4'),
                'colVesp' => Input::get('carne5'),
                'cena' => Input::get('carne6'),
                'fecha_plan' => $fecha,
                'id_dg' => $id,
                ));
        planAlimenticio::create(array(
                'alimento' => "Fruta",
                'desayuno' => Input::get('fruta2'),
                'colMat' => Input::get('fruta3'),
                'comida' => Input::get('fruta4'),
                'colVesp' => Input::get('fruta5'),
                'cena' => Input::get('fruta6'),
                'fecha_plan' => $fecha,
                'id_dg' => $id,
                ));
        planAlimenticio::create(array(
                'alimento' => "Vegetales",
                'desayuno' => Input::get('veg2'),
                'colMat' => Input::get('veg3'),
                'comida' => Input::get('veg4'),
                'colVesp' => Input::get('veg5'),
                'cena' => Input::get('veg6'),
                'fecha_plan' => $fecha,
                'id_dg' => $id,
                ));
        planAlimenticio::create(array(
                'alimento' => "Cereales y Tuberculos",
                'desayuno' => Input::get('cerytub2'),
                'colMat' => Input::get('cerytub3'),
                'comida' => Input::get('cerytub4'),
                'colVesp' => Input::get('cerytub5'),
                'cena' => Input::get('cerytub6'),
                'fecha_plan' => $fecha,
                'id_dg' => $id,
                ));
        planAlimenticio::create(array(
                'alimento' => "Leguminosa",
                'desayuno' => Input::get('leguminosa2'),
                'colMat' => Input::get('leguminosa3'),
                'comida' => Input::get('leguminosa4'),
                'colVesp' => Input::get('leguminosa5'),
                'cena' => Input::get('leguminosa6'),
                'fecha_plan' => $fecha,
                'id_dg' => $id,
                ));
        planAlimenticio::create(array(
                'alimento' => "Grasas",
                'desayuno' => Input::get('grasas2'),
                'colMat' => Input::get('grasas3'),
                'comida' => Input::get('grasas4'),
                'colVesp' => Input::get('grasas5'),
                'cena' => Input::get('grasas6'),
                'fecha_plan' => $fecha,
                'id_dg' => $id,
                ));
        planAlimenticio::create(array(
                'alimento' => "Azucar",
                'desayuno' => Input::get('azucar2'),
                'colMat' => Input::get('azucar3'),
                'comida' => Input::get('azucar4'),
                'colVesp' => Input::get('azucar5'),
                'cena' => Input::get('azucar6'),
                'fecha_plan' => $fecha,
                'id_dg' => $id,
                ));
        
        $paciente = DB::table('datosgenerales')->where('id_dg',$id)->get();
        $historico = DB::table('datosfisicos')->where('id_dg',$id)->orderBy('fecha_hist','desc')->limit(1)->get();
        $MA = DB::table('miembrosamputados')->where('id_dg',$id)->get();

        $leche = DB::table('planalimenticio')->where([
            ['id_dg','=',$id],
            ['alimento','=','Leche'],
            ])->orderBy('fecha_plan','desc')->limit(1)->get();
        $carne = DB::table('planalimenticio')->where([
            ['id_dg','=',$id],
            ['alimento','=','Carne'],
            ])->orderBy('fecha_plan','desc')->limit(1)->get();
        $fruta = DB::table('planalimenticio')->where([
            ['id_dg','=',$id],
            ['alimento','=','Fruta'],
            ])->orderBy('fecha_plan','desc')->limit(1)->get();
        $vege = DB::table('planalimenticio')->where([
            ['id_dg','=',$id],
            ['alimento','=','Vegetales'],
            ])->orderBy('fecha_plan','desc')->limit(1)->get();
        $cyt = DB::table('planalimenticio')->where([
            ['id_dg','=',$id],
            ['alimento','=','Cereales y Tuberculos'],
            ])->orderBy('fecha_plan','desc')->limit(1)->get();
        $legu = DB::table('planalimenticio')->where([
            ['id_dg','=',$id],
            ['alimento','=','Leguminosa'],
            ])->orderBy('fecha_plan','desc')->limit(1)->get();
        $grasa = DB::table('planalimenticio')->where([
            ['id_dg','=',$id],
            ['alimento','=','Grasas'],
            ])->orderBy('fecha_plan','desc')->limit(1)->get();
        $azucar = DB::table('planalimenticio')->where([
            ['id_dg','=',$id],
            ['alimento','=','Azucar'],
            ])->orderBy('fecha_plan','desc')->limit(1)->get();
        return view('Pages.Alimentacion')->with('paciente', $paciente)
        ->with('historico', $historico)
        ->with('MA', $MA)
        ->with('id', $id)
        ->with('leche',$leche)->with('carne',$carne)->with('fruta',$fruta)->with('vege',$vege)
        ->with('cyt',$cyt)->with('legu',$legu)->with('grasa',$grasa)->with('azucar',$azucar);
    }
}
