<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\User;
use DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Pages.Registro');
    }
    public function nuevoUsuario(){
        
        $data = ['name'=>Input::get('name'),'usrname'=>Input::get('usrname'),'password'=>Input::get('password')];
        $user = Input::get('usrname');
        $existe = DB::table('users')->where('usrname',$user)->first();

        if ($existe == NULL) {
            User::create(array(
                'name' => Input::get('name'),
                'usrname' => Input::get('usrname'),
                'password' => bcrypt(Input::get('password'))
            ));
            session()->flash('alert-success', 'El nuevo usuario ha sido registrado.');
            return redirect()->back();
        }
        else{
            session()->flash('alert-warning', 'Nombre de usuario ya existe!');
            return redirect()->back()->withInput($data);
        }

        
    }

    public function Baja(){
        
            $busqueda = ['name' => Input::get('nombre'),
                        'usrname' => Input::get('usuario')];
            $id = DB::table('users')->where($busqueda)->first();
            if($id != NULL){
                DB::table('users')->where($busqueda)->delete();
                session()->flash('alert-success', 'El usuario ha sido eliminado.');
                return redirect()->back();
            }
            else{
                session()->flash('alert-warning', 'El usuario ingresado no existe.');
                return redirect()->back();
            }
            
    }
}
