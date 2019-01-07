<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| Se declara una ruta de tipo get que hace referencia al / -> menú raíz
| de nuestra aplicación y que retorna a la vista welcome
|
*/

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| Route Login
|--------------------------------------------------------------------------
|
| Ruta para levantar la vista del login
|
*/

Route::get('/user/login', function () {
    return view('user/login');
});


/*
|--------------------------------------------------------------------------
| Route User
|--------------------------------------------------------------------------
|
| Ruta del modulo del Usuario
|
*/

Route::get('/user/index', function() {
	return view('user/index');
});

Route::get('/user/createUser', function () {
    return view('user/createUser');
});

/*
|--------------------------------------------------------------------------
| Route Meeting
|--------------------------------------------------------------------------
|
| Ruta del modulo de Meeting
|
*/

//Modulo de renta 

Route::get('meeting/rental/index', function() {
	return view('meeting/rental/index');
});

//Modulo de diagnostico 

Route::get('meeting/diagnostic/index', function() {
	return view('meeting/diagnostic/index');
});

//Modulo de grabacion

Route::get('meeting/records/index', function() {
	return view('meeting/records/index');
});