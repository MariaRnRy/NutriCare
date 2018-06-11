<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class antecedentes extends Model
{
	   	
	protected $table = 'antecedentes';
	protected $primaryKey = 'id_antecedentes';
	protected $fillable =  ['nombre_ant', 'tipo', 'id_dg','fecha_ant'];
	public $timestamps = false;

}
