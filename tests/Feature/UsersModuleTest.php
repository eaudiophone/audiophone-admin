<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
//use audiophoneapp\app\Users;

class UsersModuleTest extends TestCase
{
    
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
}

