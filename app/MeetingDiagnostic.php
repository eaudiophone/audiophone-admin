<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeetingDiagnostic extends Model
{
/*
 **********************************************************
 *   Declaración Personalizada de Tabla MeetingDiagnostic *
 **********************************************************
 */
	protected $table = 'MeetingDiagnostic';

/*
 ****************
 *   Atributos  *
 ****************
 */
	protected $primaryKey = 'idMeetingDiagnostic';

	public $timestamps = false;

	protected $fillable = ['addressMeeting'];

	protected $guarded = [];
}
