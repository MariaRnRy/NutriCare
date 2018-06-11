<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datosAlimenticios extends Model
{
	   	
	protected $table = 'datosalimenticios';
	protected $primaryKey = 'id_alim';
	protected $fillable =  ['leche', 'carne', 'fruta', 'vegetal', 'cer_y_tub', 'leguminosa', 'grasa', 'azucar', 'id_dg'];
	public $timestamps = false;

}
