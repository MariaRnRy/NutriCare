<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//poner funcion de fecha actual y edad
class datosGenerales extends Model
{
	   	
	protected $table = 'datosgenerales';
	protected $primaryKey = 'id_dg';
	protected $fillable =  ['nombre', 'nss', 'f_nacimiento', 'sexo', 'ocupacion', 'telefono', 'direccion'];
	public $timestamps = false;

}
