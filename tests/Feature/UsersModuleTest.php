<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
//use audiophoneapp\Users;

class UsersModuleTest extends TestCase
{
    
  //use RefreshDatabase; si usas este trait vuelas las tablas de la base de datos

    /** 
     *@test
     */

    function load_a_new_user_form(){

      $this->get('createUsers/new')
      ->assertStatus(200);

    }

    /** 
     *@test
     */
 
    function create_a_new_user(){

      $this->withoutExceptionHandling();

     	$this->post('createUsers/create', [

    		'firstName' => 'Alfonso',
    		'lastName' => 'Martinez',
   			'codePhone' => '58',
   			'cellPhone' => '4264042672'

    	]);

    	
      $this->assertDatabaseHas('Users', [

        'firstName' => 'Alfonso',
        'lastName' => 'Martinez',
        'codePhone' => '58',
        'cellPhone' => '4264042672'        

      ]);

    }

    /** 
     *@test
     */

    function validate_fields_firstName(){

      //$this->withoutExceptionHandling();//con este validador te indica que la data dada no es correcta, y es correcto, para ello se coloca el from 

      $this->from(route('usernew'))->post('createUsers/create', [

        'firstName' => '',
        'lastName' => 'Martinez',
        'codePhone' => '58',
        'cellPhone' => '4264042672'

      ])->assertRedirect(route('usernew'))
        ->assertSessionHasErrors(['firstName' => 'El Nombre es obligatorio']);

      $this->assertDatabaseMissing('Users', [

        'lastName' => 'Martinez'

      ]);

      //$this->assertEquals(0, Users::count()); esta prueba se usa con el trait refresh database pero ese refresh te vuela la tabla.

    }
}

