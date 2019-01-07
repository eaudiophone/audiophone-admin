<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
/*
 ***********************************************
 *   Declaración Personalizada de Tabla Budget *
 ***********************************************
 */
	protected $table = 'Budget';

/*
 ****************
 *   Atributos  *
 ****************
 */
	protected $primaryKey = 'idBudget';

	public $timestamps = false;

	protected $fillable = ['User_idUser', 'Item_idItem', 'Services_idServices', 'dateBudget', 'IVA', 'total', 'subTotal'];

	protected $guarded = [];
}
