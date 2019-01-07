<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
/*
 **********************************************
 *   Declaración Personalizada de Tabla Audit *
 **********************************************
 */
	protected $table = 'Audit';

/*
 ****************
 *   Atributos  *
 ****************
 */
	protected $primaryKey = 'idAudit';

	public $timestamps = false;

	protected $fillable = ['User_idUser','detailsAudit', 'dateAudit', 'hourAudit'];

	protected $guarded = [];
}
