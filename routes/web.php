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
    return view('users/login');
});

Route::get('/users/recoveryPasswords', function() {
	return view('users/recoveryPasswords');
});


/*
|--------------------------------------------------------------------------
| Route User
|--------------------------------------------------------------------------
|
| Ruta del modulo del Usuario
|
*/

Route::get('/users/profiles/index', function() {
	return view('users/profiles/index');
});

Route::get('/users/createUsers', function () {
    return view('users/createUsers');
});

Route::get('/users/createAccounts', function () {
    return view('users/createAccounts');
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

Route::get('meetings/rentals/index', function() {
	return view('meetings/rentals/index');
});

//Modulo de diagnostico 

Route::get('meetings/diagnostics/index', function() {
	return view('meetings/diagnostics/index');
});

//Modulo de grabacion

Route::get('meetings/records/index', function() {
	return view('meetings/records/index');
});


/*
|--------------------------------------------------------------------------
| Route Admin
|--------------------------------------------------------------------------
|
| Ruta para levantar la vista del admin
|
*/

Route::get('/admins/index', function() {
	return view('admins/index');
});

Route::get('/admins/profiles', function() {
	return view('admins/profiles');
});

Route::get('/admins/estadistics', function() {
	return view('admins/estadistics');
});

Route::get('admins/shows', function() {
	return view('admins/shows');
});

Route::get('admins/days', function() {
	return view('admins/days');
});

Route::get('admins/budgets', function() {
	return view('admins/budgets');
});

Route::get('admins/adminProfiles', function() {
	return view('admins/adminProfiles');
});