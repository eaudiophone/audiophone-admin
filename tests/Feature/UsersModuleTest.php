<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /**
     * 
     * @test
     *
     */

    //para hacer pruebas de asserciones HTTP es necesario tener bien declaradas las rutas en web.php

    /*function load_form_createUsers(){

        $this->get('/')->assertStatus(200);

    }*/

 
    function create_a_new_user(){


    	//$this->get('/')->assertStatus(200);

    	//$this->withoutExceptionHandling();

    	

    	$this->post('users/createUsers', [

    		'firstName' => 'Alfonso',
    		'lastName' => 'Martinez',
   			'codePhone' => 58,
   			'cellPhone' => 4264042672

    	]);


    	$this->assertDatabaseHas('Users', [

   			'firstName' => 'Alfonso',
   			'lastName' => 'Martinez',
   			'codePhone' => 58,
   			'cellPhone' => 4264042672

    	]);


    	$this->assertRedirect('users/createAccounts')->assertStatus(200);
    	 // ->assertSee('Datos Personales Registrados');
    	
    }
}

