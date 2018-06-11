<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');

Route::post('/', 'HomeController@index')->name('index');

Route::get('/inicio', 'HomeController@index')->name('inicio');

Route::post('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::post('/datosFisicos', 'PagesController@nuevo')->name('nuevo');

Route::post('/antecedentes', 'PagesController@guardar')->name('guardar');

Route::post('/datosAlimenticios', 'PagesController@guardarAnt')->name('guardarAnt');

Route::post('/planAlimenticio', 'PagesController@guardarDes')->name('guardarDes');

Route::post('/actualizarDF', 'PagesController@actualizar')->name('actualizar');

Route::post('/actualizarPA', 'PagesController@guardarAct')->name('guardarAct');

Route::post('/reporte', 'PagesController@guardarPlan')->name('guardarPlan');

Route::post('/reporte2', 'PagesController@reporte2')->name('reporte2');

Route::post('/reporte1', 'PagesController@reporte1')->name('reporte1');

Route::post('/expediente2', 'PagesController@reporte2B')->name('reporte2B');

Route::post('/expediente1', 'PagesController@reporte1B')->name('reporte1B');

Route::post('/expediente', 'PagesController@buscar')->name('buscar');

Route::prefix('admin')->group(function(){
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::post('/', 'AdminController@index')->name('admin.dashboard');
	Route::post('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
	Route::post('/baja', 'AdminController@Baja')->name('Baja');
Route::post('/alta', 'AdminController@nuevoUsuario')->name('nuevoUsuario');
});