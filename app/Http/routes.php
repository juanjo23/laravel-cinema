<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* Restful controller */
Route::resource('movie', 'MovieController');


Route::get('saludar/', 'MiController@index');
Route::get('saludar/{name}', 'MiController@saludo');

Route::get('test', function(){
  return "Hola desde routes.php";
});



//Con parametros
Route::get('test/{id}', function($id){
  return "Hola desde routes.php: ".$id;
});


Route::get('/', function () {
    return view('welcome');
});
