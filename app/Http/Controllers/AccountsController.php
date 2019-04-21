<?php

namespace audiophoneapp\Http\Controllers;

use Illuminate\Http\Request;
use audiophoneapp\app\Accounts;
use audiophoneapp\app\Users;
use audiophoneapp\app\Requests\AccountsRequest;

class AccountsController extends Controller
{
    
	public function index(){

		return view('welcome');

	}

	public function createAccounts(){

		return view('users.createAccounts');

	}

	
	public function storeAccounts(AccountsRequest $request){

		$dataAccounts = request()->all();

		Accounts::create([

			   'email' => $dataAccounts['email'],
            'password' => bcrypt($dataAccounts['password']),
         'typeAccount' => 2; // 1 = admin 2 = cliente
               'state' => true;
   
   		]);


		$idAccount = Accounts::find($idAccount);	

		if($idAccount){

			return redirect(route('users.login')->with('success','Datos de Cuenta Registrados'));
			
		}else{

			return redirect(route('users.createAccounts')->withErrors($dataAccounts)->withInput(request(['email'])));
		}
			
	}


	public function consultAccounts($idAccount){

	 	return view('users.profiles.index', ['idAccount' => Accounts::findOrFail($idAccount)]);

	}


	public function editAccounts($idAccount){

		$dataAccounts = Accounts::find($idAccount);

		if($idAccount){

			return view('users.profiles.index', compact('dataAccounts'));

		}else{

			return "Cuenta no Encontrada.";
		}

	}

	public function modifyUsers(AccountsRequest $request, $idAccount){

		$idAccount = Accounts::find($idAccount);

		if($idAccount){

			$dataAccounts = request()->all();

			if(!$dataAccounts->fails()){

				Accounts::update([
		
			   		'email' => $dataAccounts['email'],
            	 'password' => bcrypt($dataAccounts['password'])
	
				]);
	
				return redirect(route('users.profiles.index')->with('success','Datos de Cuenta Actualizados.')); 
			
			}else{

				return redirect(route('users.createAccounts')->withErrors($dataAccounts)->withInput());
			}
		
		}else{

			return "Cuenta no Encontrada.";
		}
	
	}

	public function deleteAccounts($idAccount){

		$idAccount = Accounts::find($idAccount);

		if($idAccount){

			Accounts::update(['state' => false]);
			
			return redirect(route('users.login')->with('success', 'Cuenta Inhabilitada'));

		}else{

			return "Usuario no Econtrado.";	

		}

	}



}
