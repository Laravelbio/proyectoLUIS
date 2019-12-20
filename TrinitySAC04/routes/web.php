<?php

Route::get('/', 'Auth\LoginController@showLoginForm')->middleware('guest'); //RUTA LOGIN COMO INICIO

Route::get('dashboard', 'DashboardController@index')->name('dashboard');  //VISTA MENU PRINCIPAL (EN CONSTRUCCION ESPERA DE FUNCIONALIDAD)

Route::post('login', 'Auth\LoginController@login')->name('login'); //CONTROLADOR DE AUTENTIFICACION DEL LOGIN (EN CONSTRUCCION)

Route::post('logout', 'Auth\LoginController@logout')->name('logout'); //CONTROLADOR DE AUTENTIFICACION DEL LOGIN (EN CONSTRUCCION)

Route::get('dashboard/gestion', 'GestionController@index')->name('gestion');

Route::get('dashboard/Registrarinstalacion', 'GestionController@index')->name('Registrarinstalacion');



Route::get('dashboard/registrousuarios', 'RegistroUsuariosController@index')->name('registrousuarios');

Route::post('dashboard/registrousuarios/registrar', 'RegistroUsuariosController@store')->name('registrousuariosaccion');


Route::get('dashboard/cargatrabajo', 'CargaTrabajoController@index')->name('cargatrabajo');



Route::get('dashboard/evaluacion', 'EvaluacionController@index')->name('gestion.evaluacion');

Route::get('dashboard/evaluacion/cliente', 'EvaluacionController@listaclientes')->name('cliente');

//Route::get('dashboard/evaluacion/{id}', 'EvaluacionController@selectcliente')->name('evaluacion');



Route::get('dashboard/registrarcorrectivos', 'RegistrarCorrectivosController@index')->name('registrarcorrectivos');

Route::get('dashboard/correctivos', 'CorrectivosController@index')->name('correctivos');

Route::get('dashboard/ubicaciones', 'UbicacionesController@index')->name('ubicaciones');

Route::get('dashboard/reasignacion', 'ReasignacionController@index')->name('reasignacion');

Route::get('dashboard/agendaordentrabajo', 'AgendaOrdenTrabajoController@index')->name('agendaordentrabajo');

Route::get('dashboard/ingresoexistencias', 'IngresoExistenciasController@index')->name('ingresoexistencias'); 

Route::get('dashboard/salidaexistencias', 'SalidaExistenciasController@index')->name('salidaexistencias'); 

Route::get('dashboard/Stock', 'StockController@index')->name('Stock');

Route::get('dashboard/Aprobarproducto', 'AprobarproductoController@index')->name('Aprobarproducto');

Route::get('dashboard/Devoluciones', 'DevolucionesController@index')->name('Devoluciones');

Route::get('dashboard/Activos', 'ActivosController@index')->name('Activos');

Route::get('dashboard/unidadmedida', 'unidadmedidaController@index')->name('unidadmedida');

Route::get('dashboard/ElementosActivos', 'ElementosActivosController@index')->name('ElementosActivos');

Route::get('dashboard/reportegeneral', 'ReporteGeneralController@index')->name('reportegeneral');

Route::get('dashboard/busqueda', 'BusquedaController@index')->name('busqueda');
