<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    
/*
*************************************************
*   Declaración Personalizada de Tabla Account  *
*************************************************
*/
    protected $table = 'Account';

/*
****************
*   Atributos  *
****************
*/
	protected $primaryKey = 'idAccount';

	public $timestamps = false;

	protected $fillable = ['User_idUser', 'email', 'password', 'verifyPassword', 'typeAccount', 'statusAccount']; 

	protected $guarded = [];

}
