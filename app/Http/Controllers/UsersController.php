<?php

namespace audiophoneapp\Http\Controllers;

use Illuminate\Http\Request; 
use audiophoneapp\Users;
use audiophoneapp\Http\Requests\UsersRequest; 

class UsersController extends Controller
{
    
	public function index(){

		return view('welcome');

	}

	public function createUsers(){

		return view('users.createUsers');

	}
	
 	public function storeUsers(){//UsersRequest $request){



		$dataUser = request()->validate([

			'firstName' => 'required',
			'lastName' => 'required',
			'codePhone' => 'required',
			'cellPhone' => 'required'
		], [

			'firstName.required' => 'El Nombre es obligatorio',
			'lastName.required' => 'El Apellido es obligatorio',
			'codePhone.required' => 'El Códido de país es obligatorio',
			'cellPhone.required' => 'El Nro. Celular es obligatorio'

		])/*->all()*/;

		//return redirect(route('usernew'))->withInput()->withErrors($dataUser); //laravel envía los errores automaticamente a la vista por medio de la variable errors		


		/*

			Si nosotros usamos el metodo from() en los test no hace falta colocar un return despues del validate.

		if(empty($dataUser['firstName'])){

			return redirect(route('usernew'))->withErrors([

				'firstName' => 'El Nombre es obligatorio'		

				]);
		
		}

		/*	return redirect(route('users.createUsers')->withErrors($dataUser));//->withInput($dataUser));	
		}else{*/	

		Users::create([
		   
   	 	   'firstName' => $dataUser['firstName'],
           'lastName'  => $dataUser['lastName'],
           'codePhone' => $dataUser['codePhone'],
           'cellPhone' => $dataUser['cellPhone']

		]);

		//return redirect(route('users.createUsers')->withErrors($dataUser));

		//}
	}


 		/*

		$idUser = Users::find($idUser);	

		if($idUser){

			return redirect(route('users.createAccounts')->with('success','Datos Personales Registrados'));
			
		}else{

			return redirect(route('users.createUsers')->withErrors($dataUser)->withInput($dataUser));
		
		}
	} */


	/*public function consultUsers($idUser){

	 	return view('users.profiles.index', ['idUser' => Users::findOrFail($idUser)]);
	
	}


	public function editUsers($idUser){

		$dataUser = Users::find($idUser);

		if($idUser){

			return view('users.profiles.index', compact('dataUser'));

		}else{

			return "Usuario no Encontrado.";
		
		}

	}

	public function modifyUsers(almacenarUsers $request, $idUser){

		$idUser = User::find($idUser);

		if($idUser){

			$dataUser = request()->all();

			if(!$dataUser->fails()){

				Users::update([

					'firstName' => $dataUser['firstName'],
            		'lastName'  => $dataUser['lastName'],
            		'codePhone' => $dataUser['codePhone'],
            		'cellPhone' => $dataUser['cellPhone']
	
				]);
	
			    return redirect(route('users.profiles.index')->with('success','Datos Personales Actualizados.')); 
			
			}else{

				return redirect(route('users.profiles.index')->withErrors($dataUser)->withInput());
			}
		
		}else{

			return "Usuario no Encontrado.";
		}
	
	}

	public function deleteUsers($idUser){

		$idUser = Users::find($idUser);

		if($idUser){

			$idUser->delete();
			return redirect(routte('users.login')->with('success', 'Usuario Eliminado Satisfactoriamente.'));

		}else{

			return "Usuario no Econtrado.";	

		}
	} */
}

                                                                                                                                                                                                                              