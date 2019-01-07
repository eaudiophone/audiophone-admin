<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
/*
 *********************************************
 *   Declaración Personalizada de Tabla Item *
 *********************************************
 */
	protected $table = 'Item';

/*
 ****************
 *   Atributos  *
 ****************
 */
	protected $primaryKey = 'idItem';

	public $timestamps = false;

	protected $fillable = ['description', 'item', 'costUnit'];

	protected $guarded = [];
}
