<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CodePhone extends Model
{
/*
 **************************************************
 *   Declaración Personalizada de Tabla CodePhone *
 **************************************************
 */
	protected $table = 'CodePhone';

/*
 ****************
 *   Atributos  *
 ****************
 */
	protected $primaryKey = 'idcodePhone';

	public $timestamps = false;

	protected $fillable = ['codePhone', 'country'];

	protected $guarded = [];
}
