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

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/turistas', function () {
    return ('usarios');
});

Route::get('/usuarios/nuevo', function () {
    return view ('turistas');
});

Route::get('/afiliados', function ($id) {
    return view ("Mostrando detalle del usuario: {$id}" );
});


Route::get('/saludo/{name}/{nickname?}', function ($name,$nickname=null) {

  if($nickname)
    return ("Bienvenido {$name}, tu apodo es {$nickname}" );
  else
    return ("Bienvenido {$name}, no tienes apodo" );
});
*/
