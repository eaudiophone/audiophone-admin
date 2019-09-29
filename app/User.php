<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
/*
 *********************************************
 *   Declaración Personalizada de Tabla User *
 *********************************************
 */
	protected $table = 'users';

/*
 ****************
 *   Atributos  *
 ****************
 */
	protected $primaryKey = 'id';

	public $timestamps = false;

	protected $fillable = [
		'email', 
		'password', 
		'rol', 
		'state', 
		'registrationDate'
	];

	protected $guarded = [];

}
