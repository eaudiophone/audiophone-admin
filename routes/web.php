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

Route::get('/user/recoveryPassword', function() {
	return view('user/recoveryPassword');
});


/*
|--------------------------------------------------------------------------
| Route User-Vistas
|--------------------------------------------------------------------------
|
| Ruta del modulo del Usuario
|
*/

Route::get('/user/profiles/index', function() {
	return view('user/profiles/index');
});

Route::get('/user/createUser', function () {
    return view('user/createUser');
});

Route::get('/user/createAccount', function () {
    return view('user/createAccount');
});


/*
|--------------------------------------------------------------------------
| Route Users-Controllers
|--------------------------------------------------------------------------
|
| Controladores del modulo Usuarios
|
*/

Route::resource('/user/createUser', 'CreateUsersController@create' )->name('create.users');

Route::resource('/user/');

Route::resource('/user/createAccount', 'CreateAccountsController@create' )->name('create.accounts');



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

Route::get('/admin/estadistic', function() {
	return view('admin/estadistic');
});

Route::get('admin/show', function() {
	return view('admin/show');
});

Route::get('admin/days', function() {
	return view('admin/days');
});

Route::get('admin/budget', function() {
	return view('admin/budget');
});

Route::get('admin/adminProfile', function() {
	return view('admin/adminProfile');
});