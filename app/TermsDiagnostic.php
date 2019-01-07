<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TermsDiagnostic extends Model
{
/*
 ********************************************************
 *   Declaración Personalizada de Tabla TermsDiagnostic *
 ********************************************************
 */
	protected $table = 'TermsDiagnostic';

/*
 ****************
 *   Atributos  *
 ****************
 */
	protected $primaryKey = 'idTermsDiagnostic';

	public $timestamps = false;

	protected $fillable = ['quantityDayDiagnostic', 'quantityWeekDiagnostic', 'daysMeetingDiagnostic', 'hourBeginMeetingDiagnostic', 'hourFinalMeetingDiagnostic'];

	protected $guarded = [];
}
