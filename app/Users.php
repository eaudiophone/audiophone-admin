<?php

namespace audiophoneapp;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
/*
 *********************************************
 *   Declaración Personalizada de Tabla Users *
 *********************************************
 */
	protected $table = 'Users';

/*
 ****************
 *   Atributos  *
 ****************
 */
	protected $primaryKey = 'idUser';

	public $timestamps = false;

	protected $fillable = ['firstName', 'lastName', 'codePhone', 'cellPhone'];

	protected $guarded = [];
}
