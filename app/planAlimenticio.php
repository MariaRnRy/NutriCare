<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class planAlimenticio extends Model
{
	   	
	protected $table = 'planalimenticio';
	protected $primaryKey = 'id_plan';
	protected $fillable =  ['alimento', 'desayuno', 'colMat', 'comida', 'colVesp', 'cena', 'fecha_plan', 'id_dg'];
	public $timestamps = false;

}
