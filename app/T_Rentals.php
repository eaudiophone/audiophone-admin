<?php

namespace audiophoneapp;

use Illuminate\Database\Eloquent\Model;

class T_Rentals extends Model
{
/*
 *****************************************************
 *   Declaración Personalizada de Tabla TermsRental  *
 *****************************************************
 */
	protected $table = 'T_Rentals';

/*
 ****************
 *   Atributos  *
 ****************
 */
	protected $primaryKey = 'idTRental';

	public $timestamps = false;

	protected $fillable = ['dayRental', 'weekRental', 'allowedDayRental'];

	protected $guarded = [];

}
