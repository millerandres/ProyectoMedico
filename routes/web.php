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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//speciality

	Route::middleware(['auth','admin'])->namespace('Admin')->group(function(){

		Route::get('/specialties','SpecialtyController@index');
		Route::get('/specialties/create', 'SpecialtyController@create');
		Route::get('/specialties/{speciality}/edit', 'SpecialtyController@edit');

		Route::post('/specialties', 'SpecialtyController@store');
		Route::put('/specialties/{speciality}', 'SpecialtyController@update');
		Route::delete('/specialties/{speciality}', 'SpecialtyController@destroy');

		//Doctors
		Route::resource('doctors','DoctorController'); //este metodo me crea multiples rutas

		//patient
		Route::resource('patients','PatientController'); //este metodo me crea multiples rutas

	});




