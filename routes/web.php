<?php

/*
|--------------------------------------------------------------------------
| Web Routes Audiophone
|--------------------------------------------------------------------------
|
*/

/*
|--------------------------------------------------------------------------
| Route Login
|--------------------------------------------------------------------------
|
| Rutas de control para el ingreso de los usuarios
|
*/

	Route::get('login', function(){
		
		return view('users.login');
	
	});


	Route::get('/', function(){
		
		return view('welcome');
	
	});

	Route::get('users/createAccounts', function(){
		
		return view('users.createAccounts');
	
	});

/*
|--------------------------------------------------------------------------
| Routes Para el Modelo Users
|--------------------------------------------------------------------------
|
| Rutas de archivos y controladores para el modelo Users
|
*/

Route::resource('users', 'UsersController');


/*
|--------------------------------------------------------------------------
| Routes Para el Modelo Accounts
|--------------------------------------------------------------------------
|
| Rutas de archivos y controladores para el modelo Accounts
|
*/

Route::resource('accounts', 'AccountsController');


/*
|--------------------------------------------------------------------------
| Route para las Audits
|--------------------------------------------------------------------------
|
| Rutas de archivos y controladores para el modelo Audits
| 
| Este modelo almacena y muestra las gestiones realizadas por los usuarios
|
*/

Route::resource('audits', 'AuditsController');

/*
|--------------------------------------------------------------------------
| Route para las Meetings
|--------------------------------------------------------------------------
|
| Rutas de archivos y controladores para el modelo Meetings
| 
| Se crean manuales ya que se manejan tres vistas: Diagnostico, Grabaciones y Alquiler
|
*/

/*
|---------------------------------------------------------------------------- 
| Rutas para MeetingsDiagnostic
|----------------------------------------------------------------------------
*/      

Route::get('meetings/diagnostics/create', 'MeetingsController@createMeetings')->name('crearDiagnostico');

Route::post('meetings/diagnostics/store', 'MeetingsController@storeMeetings')->name('almacenarDiagnostico');

Route::get('meetings/diagnostics/consult/{idMeeting}', 'MeetingsController@consultMeetings')->name('consultarDiagnostico')->where('idMeeting', '[0-9]+');

Route::put('meetings/diagnostics/modify/{idMeeting}', 'MeetingsController@modifyMeetings')->name('modificarDiagnostico')->where('idMeeting', '[0-9]+');

Route::delete('meetings/diagnostics/delete/{idMeeting}', 'MeetingsController@deleteMeetings')->name('eliminarDiagnostico')->where('idMeeting', '[0-9]+');

/*
|---------------------------------------------------------------------------- 
| Rutas para MeetingsRecords
|----------------------------------------------------------------------------
*/

Route::get('meetings/records/create', 'MeetingsController@createMeetings')->name('crearDiagnostico');

Route::post('meetings/records/store', 'MeetingsController@storeMeetings')->name('almacenarDiagnostico');

Route::get('meetings/records/consult/{idMeeting}', 'MeetingsController@consultMeetings')->name('consultarDiagnostico')->where('idMeeting', '[0-9]+');

Route::put('/meetings/records/modify/{idMeeting}', 'MeetingsController@modifyMeetings')->name('modificarDiagnostico')->where('idMeeting', '[0-9]+');

Route::delete('/meetings/records/delete/{idMeeting}', 'MeetingsController@deleteMeetings')->name('eliminarDiagnostico')->where('idMeeting', '[0-9]+');

/*
|---------------------------------------------------------------------------- 
| Rutas para MeetingsRental
|----------------------------------------------------------------------------
*/

Route::get('meetings/rentals/create', 'MeetingsController@createMeetings')->name('crearDiagnostico');

Route::post('meetings/rentals/store', 'MeetingsController@storeMeetings')->name('almacenarDiagnostico');

Route::get('meetings/rentals/consult/{idMeeting}', 'MeetingsController@consultMeetings')->name('consultarDiagnostico')->where('idMeeting', '[0-9]+');

Route::put('meetings/rentals/modify/{idMeeting}', 'MeetingsController@modifyMeetings')->name('modificarDiagnostico')->where('idMeeting', '[0-9]+');

Route::delete('meetings/rentals/delete/{idMeeting}', 'MeetingsController@deleteMeetings')->name('eliminarDiagnostico')->where('idMeeting', '[0-9]+');



/*
|--------------------------------------------------------------------------
| Routes Para el Modelo T_Diagnostics
|--------------------------------------------------------------------------
|
| Rutas de archivos y controladores para el modelo T_Diagnostics -> Terminos o Condiciones de solicitud
|
*/

Route::resource('tdiagnostics', 'TDiagnosticController');

/*
|--------------------------------------------------------------------------
| Routes Para el Modelo T_Recordings
|--------------------------------------------------------------------------
|
| Rutas de archivos y controladores para el modelo T_Recordings -> Terminos o Condiciones de solicitud
|
*/

Route::resource('trecordings', 'TRecordingsController');

/*
|--------------------------------------------------------------------------
| Routes Para el Modelo T_Rentals
|--------------------------------------------------------------------------
|
| Rutas de archivos y controladores para el modelo T_Rentals -> Terminos o Condiciones de solicitud
|
*/

Route::resource('trentals', 'TDiagnostController');


/*
|--------------------------------------------------------------------------
| Routes Para el Modelo Items
|--------------------------------------------------------------------------
|
| Rutas de archivos y controladores para el modelo Items
|
*/

Route::resource('items', 'ItemsController');


/*
|--------------------------------------------------------------------------
| Routes Para el Modelo User_Items
|--------------------------------------------------------------------------
|
| Rutas de archivos y controladores para el modelo User_Items
|
*/

Route::resource('useritems', 'UserItemsController');



