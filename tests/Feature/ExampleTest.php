<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


    class ExampleTest extends TestCase{
	
	/**
     * A basic test example.
     *   
	 * @return void
     * 
     **/

    	public function testBasicTest(){

    	    $response = $this->get('/'); //aca se coloca la ruta que esta en el web

            $response->assertStatus(200);

    	}

    }
