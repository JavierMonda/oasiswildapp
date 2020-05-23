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
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('index');
});
Route::get('/encuestas/restaurants/oasis', function () {
    return view('encuestas.restaurants.oasis');
});
Route::get('/encuestas/restaurants/leones', function () {
    return view('encuestas.restaurants.leones');
});
Route::get('/encuestas/restaurants/patio', function () {
    return view('encuestas.restaurants.patio');
});
Route::get('/encuestas/oasis', function () {
    return view('encuestas.oasis');
});
Route::get('/encuestas/guaguas', function () {
    return view('encuestas.guaguas.index');
});
Route::get('/encuestas/guaguas/01', function () {
    return view('encuestas.guaguas.01');
});
Route::get('/encuestas/guaguas/02', function () {
    return view('encuestas.guaguas.02');
});
Route::get('/encuestas/guaguas/03', function () {
    return view('encuestas.guaguas.03');
});
Route::get('/encuestas/guaguas/04', function () {
    return view('encuestas.guaguas.04');
});
Route::get('/encuestas/guaguas/05', function () {
    return view('encuestas.guaguas.05');
});
Route::get('/encuestas/guaguas/06', function () {
    return view('encuestas.guaguas.06');
});
Route::get('/encuestas/guaguas/07', function () {
    return view('encuestas.guaguas.07');
});
Route::get('/encuestas/guaguas/08', function () {
    return view('encuestas.guaguas.08');
});
Route::get('/encuestas/guaguas/09', function () {
    return view('encuestas.guaguas.09');
});
Route::get('/encuestas/guaguas/10', function () {
    return view('encuestas.guaguas.10');
});
Route::get('/encuestas/guaguas/11', function () {
    return view('encuestas.guaguas.11');
});
Route::get('/encuestas/guaguas/12', function () {
    return view('encuestas.guaguas.12');
});
Route::get('/encuestas/guaguas/13', function () {
    return view('encuestas.guaguas.13');
});
Route::get('/formularios', function () {
    return view('formularios.index');
});
Route::get('/empleados', function () {
    return view('empleados.index');
});
Route::get('/fotografia', function () {
    return view('fotografia.index');
});
Route::get('/moviles', function () {
    return view('moviles.index');
});
Route::get('/admin/moviles/', 'AdminController@moviles');

Route::get('/fotografia/codigo', function () {
    return view('fotografia.codigo');
});
Route::get('/fotografia/subida', function () {
    return view('fotografia.subida');
});
Route::get('/formularios/sealion', function () {
    return view('formularios.sealion');
});
Route::get('/formularios/camel', function () {
    return view('formularios.camel');
});
Route::get('/formularios/lemur', function () {
    return view('formularios.lemur');
});
Route::get('/formularios/papagayos', function () {
    return view('formularios.papagayos');
});
Route::resource('admin', 'AdminController');
Route::resource('encuestas', 'EncuestaController');
Route::resource('encuestas.restaurants.oasis', 'ROasisController');
Route::resource('encuestas.restaurants.leones', 'RLeonesController');
Route::resource('encuestas.restaurants.patio', 'RPatioController');
Route::resource('encuestas.guaguas', 'GuaguaController');
Route::resource('empleados', 'EmpleadoController');
Route::resource('fotografia', 'FotografiaController');
Route::resource('foto', 'FotoController');
Route::resource('formularios', 'FormularioController');
Route::resource('moviles', 'MovilController');
Route::post('moviles/create', 'MovilController@store');
Route::post('encuestas/guaguas/create', 'GuaguaController@store');
Route::post('encuestas/guaguas/01', 'GuaguaController@store');
Route::post('encuestas/restaurants/create', 'EncuestaController@store');
Route::post('encuestas/restaurants/oasis', 'ROasisController@store');
Route::post('encuestas/restaurants/leones', 'RLeonesController@store');
Route::post('encuestas/restaurants/patio', 'RPatioController@store');
Route::post('fotografia/subida', 'FotografiaController@store');
Route::post('fotografia/codigo', 'FotografiaController@download');
Route::put('fotografia/update', 'FotografiaController@update');
Route::post('formularios/create', 'FormularioController@store');
Route::post('formularios/sealion', 'FormularioController@store');

Route::get('/downloads/{file}', function ($file) {
    return Storage::download("uploads/$file");
});