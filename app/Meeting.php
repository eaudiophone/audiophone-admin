<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
/*
 ************************************************
 *   Declaración Personalizada de Tabla Meeting *
 ************************************************
 */
	protected $table = 'Meeting';

/*
 ****************
 *   Atributos  *
 ****************
 */
	protected $primaryKey = 'idMeeting';

	public $timestamps = false;

	protected $fillable = ['User_idUser', 'MeetingDiagnostic_idMeetingDiagnostic', 'MeetingDiagnostic_idMeetingDiagnostic', 'MeetingRental_idMeetingRental', 'TermsDiagnostic_idTermsDiagnostic', 'TermsRecording_idTermsRecording', 'TermsRental_idTermsRental', 'appointmentDate', 'startingTime', 'totalHours', 'finalHour', 'stateMeeting'];

	protected $guarded = [];
}
