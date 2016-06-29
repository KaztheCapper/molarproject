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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('mypatients', 'PatientsController@index');
Route::get('mypatients/{patient}', 'PatientsController@show');

Route::post('mypatients/{patient}/appointments', 'AppointmentsController@store');

Route::get('/appointments/{appointment}/edit', 'AppointmentsController@edit');
Route::patch('appointments/{appointment}', 'AppointmentsController@update');