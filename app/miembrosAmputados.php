<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class miembrosAmputados extends Model
{
	   	
	protected $table = 'miembrosamputados';
	protected $primaryKey = 'id_ma';
	protected $fillable =  ['nombre_ma', 'peso_ma', 'fecha_ma', 'id_dg'];
	public $timestamps = false;

}
