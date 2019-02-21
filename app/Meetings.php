<?php

namespace audiophoneapp;

use Illuminate\Database\Eloquent\Model;

class Meetings extends Model
{
/*
 ************************************************
 *   Declaración Personalizada de Tabla Meeting *
 ************************************************
 */
	protected $table = 'Meetings';

/*
 ****************
 *   Atributos  *
 ****************
 */
	protected $primaryKey = 'idMeeting';

	public $timestamps = false;

	protected $fillable = ['User_idUser', 'Terms_idTerms', 'typeServices',
							'appointDate', 'startingTime', 'totalHours',
							'finalHour', 'serviceAddress'];

	protected $guarded = [];
}
