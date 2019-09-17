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

Route::get('recovery', function() {
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

Route::get('profile', function() {
	return view('user/profiles/index');
});

Route::get('createUser', function () {
    return view('user/createUser');
});

Route::get('adminProfile', function() {
	return view('user/profiles/adminProfile');
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

Route::get('rental', function() {
	return view('meeting/rental/index');
});

//Modulo de grabacion

Route::get('records', function() {
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

Route::get('admin', function() {
	return view('admin/index');
});

Route::get('profiles', function() {
	return view('admin/profiles');
});

Route::get('estadistic', function() {
	return view('admin/estadistic');
});

Route::get('show', function() {
	return view('admin/show');
});

Route::get('days', function() {
	return view('admin/days');
});

Route::get('budget', function() {
	return view('admin/budget');
});

