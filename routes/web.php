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

//Route::get('/', function () {
  //  return view('welcome');
//});


/*
|--------------------------------------------------------------------------
| Route Login
|--------------------------------------------------------------------------
|
| Ruta para levantar la vista del login
|
*/

Route::get('/', function () {
    return view('user/login');
});

Route::get('/user/recoveryPassword', function() {
	return view('user/recoveryPassword');
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

Route::get('/user/createUser2', function () {
    return view('user/createUser2');
});

Route::get('/user/createUser3', function () {
    return view('user/createUser3');
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


/*
|--------------------------------------------------------------------------
| Route Admin
|--------------------------------------------------------------------------
|
| Ruta para levantar la vista del admin
|
*/

Route::get('/admin/index', function() {
	return view('admin/index');
});

Route::get('/admin/profiles', function() {
	return view('admin/profiles');
});