<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TermsRecording extends Model
{
/*
 ********************************************************
 *   Declaración Personalizada de Tabla TermsRecording  *
 ********************************************************
 */
	protected $table = 'TermsRecording';

/*
 ****************
 *   Atributos  *
 ****************
 */
	protected $primaryKey = 'idTermsRecording';

	public $timestamps = false;

	protected $fillable = ['quantityDayRecording', 'quantityWeekDiagnostic', 'daysMeetingRecording', 'hourBeginMeetingRecording', 'hourFinalMeetingRecording'];

	protected $guarded = [];
}
