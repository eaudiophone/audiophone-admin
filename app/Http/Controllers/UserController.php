<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function createUser( Request $request ) {

        // nueva instancia de usuario
        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'USER_ROLE',
            'state' => true,
            'created_at' => date('Y-m-d h:i:s', time()),
            'updated_at' => date('Y-m-d h:i:s', time())
        ]);
      
        return 'USUARIO REGISTRADO EXITOSAMENTE';

    }

    public function modifyUser( Request $request, $method, $id ) {

       if ( $method == 'changeRole' ) {

            User::where('id', $id)
                ->where( 'state', true )
                ->update([
                    'role' => $request->role
            ]);
        }

        else {

            User::where('id', $id)
                ->where( 'state', true )
                ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'updated_at' => date('Y-m-d h:i:s', time())
            ]);
        }

        return 'USUARIO ACTUALIZADO EXITOSAMENTE';
    }

    public function consultUser( $profile, $id ) {

    	$user = User::findOrFail( $id );
        
        // dd( $user );

        if ( $profile == 'admin' ) {

            return view( 'user/accounts/adminProfile' )->with( 'user', $user ); 
        }

        else if ( $profile == 'user' ) {

            return view( 'user/accounts/index' )->with( 'user', $user ); 
        }

        else {

            back();
        }
    }

    public function deleteUser( $id ) {

    	return 'USUARIO ELIMINADO EXITOSAMENTE';
    }

    public function listUsers() {

        $users = User::where( 'state', true )
            ->orderBy( 'id', 'asc' )
            ->take( 10 )
            ->get();

        return view( 'admin/profiles/index' )->with( 'users', $users );
    }
}
