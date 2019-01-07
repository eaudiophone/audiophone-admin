<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
/*
 **********************************************
 *   Declaración Personalizada de Tabla Phone *
 **********************************************
 */
	protected $table = 'Phone';

/*
 ****************
 *   Atributos  *
 ****************
 */
	protected $primaryKey = 'idPhone';

	public $timestamps = false;

	protected $fillable = ['User_idUser', 'localPhone', 'cellPhone', 'CodePhone_idcodePhone'];

	protected $guarded = [];
}
