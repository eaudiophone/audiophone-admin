<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
/*
 *************************************************
 *   Declaración Personalizada de Tabla Services *
 *************************************************
 */
	protected $table = 'Services';

/*
 ****************
 *   Atributos  *
 ****************
 */
	protected $primaryKey = 'idServices';

	public $timestamps = false;

	protected $fillable = ['description', 'nameServices'];

	protected $guarded = [];
}
