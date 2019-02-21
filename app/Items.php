<?php

namespace audiophoneapp;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
/*
 *********************************************
 *   Declaración Personalizada de Tabla Item *
 *********************************************
 */
	protected $table = 'Items';

/*
 ****************
 *   Atributos  *
 ****************
 */
	protected $primaryKey = 'idItem';

	public $timestamps = false;

	protected $fillable = ['itemName', 'description', 'costUnit'];

	protected $guarded = [];
}
