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
	protected $table = 'User';

/*
 ****************
 *   Atributos  *
 ****************
 */
	protected $primaryKey = 'idUser';

	public $timestamps = false;

	protected $fillable = ['firstName', 'lastName', 'age', 'socialNetworks', 'address'];

	protected $guarded = [];

}
