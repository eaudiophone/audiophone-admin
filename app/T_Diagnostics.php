<?php

namespace audiophoneapp;

use Illuminate\Database\Eloquent\Model;

class T_Diagnostics extends Model
{
/*
 ********************************************************
 *   Declaración Personalizada de Tabla TermsDiagnostic *
 ********************************************************
 */
	protected $table = 'T_Diagnostics';

/*
 ****************
 *   Atributos  *
 ****************
 */
	protected $primaryKey = 'idTDiagnostic';

	public $timestamps = false;

	protected $fillable = ['dayDiagnostic', 'weekDiagnostic', 'allowedDayDiagnostic'];

	protected $guarded = [];
}
