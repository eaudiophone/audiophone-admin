<?php

namespace audiophoneapp;

use Illuminate\Database\Eloquent\Model;

class T_Recordings extends Model
{
/*
 ********************************************************
 *   Declaración Personalizada de Tabla TermsRecording  *
 ********************************************************
 */
	protected $table = 'T_Recordings';

/*
 ****************
 *   Atributos  *
 ****************
 */
	protected $primaryKey = 'idTRecording';

	public $timestamps = false;

	protected $fillable = ['dayRecording', 'weekRecording', 'allowedDayRecording'];

	protected $guarded = [];
}
