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
		'name',
		'email', 
		'password', 
		'rol', 
		'state', 
		'updated_at',
		'created_at',
	];

	protected $guarded = [];

}
