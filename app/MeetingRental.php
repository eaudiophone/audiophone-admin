<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeetingRental extends Model
{
/*
 ******************************************************
 *   Declaración Personalizada de Tabla MeetingRental *
 ******************************************************
 */
	protected $table = 'MeetingRental';

/*
 ****************
 *   Atributos  *
 ****************
 */
	protected $primaryKey = 'idMeetingRental';

	public $timestamps = false;

	protected $fillable = ['addressMeeting', 'numberPersons'];

	protected $guarded = [];
}
