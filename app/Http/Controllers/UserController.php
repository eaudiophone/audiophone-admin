<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function createUser( Request $request ) {

    	return 'register';
    }

    public function modifyUser( Request $request, $id ) {

    	return 'actualizar';
    }

    public function consultUser( $id ) {

    	return 'User: '.$id;
    }

    public function deleteUser( $id ) {

    	return 'Usuario eliminado';
    }
}
