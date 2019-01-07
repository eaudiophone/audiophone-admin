<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TermsRental extends Model
{
/*
 *****************************************************
 *   Declaración Personalizada de Tabla TermsRental  *
 *****************************************************
 */
	protected $table = 'TermsRental';

/*
 ****************
 *   Atributos  *
 ****************
 */
	protected $primaryKey = 'idTermsRental';

	public $timestamps = false;

	protected $fillable = ['quantityDayRental', 'quantityWeekRental', 'daysMeetingRental', 'hourBeginMeetingRental', 'hourFinalMeetingRental'];

	protected $guarded = [];

}
