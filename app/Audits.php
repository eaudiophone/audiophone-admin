<?php

namespace audiophoneapp;

use Illuminate\Database\Eloquent\Model;

class Audits extends Model
{
/*
 **********************************************
 *   Declaración Personalizada de Tabla Audit *
 **********************************************
 */
	protected $table = 'Audits';

/*
 ****************
 *   Atributos  *
 ****************
 */
	protected $primaryKey = 'idAudit';

	public $timestamps = false;

	protected $fillable = ['User_idUser','detailsAudit', 'date', 'hour'];

	protected $guarded = [];
}
