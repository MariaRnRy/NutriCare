<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class historico_dg extends Model
{
	   	
	protected $table = 'datosfisicos';
	protected $primaryKey = 'id_historico';
	protected $fillable =  ['peso', 'peso_habitual', 'estatura','cintura', 'cadera', 'PA', 'circun_mu', 'ejercicio', 'fecha_hist', 'id_dg'];
	public $timestamps = false;

}
