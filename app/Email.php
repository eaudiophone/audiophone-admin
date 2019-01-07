<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
/*
 **********************************************
 *   Declaración Personalizada de Tabla Email *
 **********************************************
 */
	protected $table = 'Email';

/*
 ****************
 *   Atributos  *
 ****************
 */
	protected $primaryKey = 'idEmail';

	public $timestamps = false;

	protected $fillable = ['emailAddress', 'adjuntFileEmail', 'subjectEmail', 'senderEmail'];

	protected $guarded = [];
}
