<?php

namespace audiophoneapp;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    
/*
*************************************************
*   Declaración Personalizada de Tabla Account  *
*************************************************
*/
    protected $table = 'Accounts';

/*
****************
*   Atributos  *
****************
*/
	protected $primaryKey = 'idAccount';

	public $timestamps = false;

	protected $fillable = ['User_idUser', 'email', 'password', 'typeAccount', 'state']; 
}
