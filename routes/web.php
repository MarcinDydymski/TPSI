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

Route::prefix('admin')->group(function(){
    Route::get('/test/{name}/{number?}', function ($name, $number = 100) {
        return $name." - ".$number;
    });
    
});

Route::get('doctors/edit/{id}', 'DoctorController@edit');
Route::post('doctors/edit/', 'DoctorController@editStore');
Route::get('doctors/create', 'DoctorController@create');
Route::get('doctors/', 'DoctorController@index');
Route::get('doctors/{id}', 'DoctorController@show');
Route::get('doctors/specializations/{id}', 'DoctorController@listBySpecialization');
Route::post('doctors/', 'DoctorController@store');
Route::get('doctors/delete/{id}', 'DoctorController@delete');

Route::get('specializations/', 'SpecializationController@index');
Route::get('specializations/create', 'SpecializationController@create');
Route::post('specializations/', 'SpecializationController@store');

Route::get('visits/', 'VisitController@index');
Route::get('visits/create', 'VisitController@create');
Route::post('visits/', 'VisitController@store');

Route::get('patients/', 'PatientController@index')->middleware('auth');
Route::get('patients/{id}', 'PatientController@show')->middleware('auth');;
Route::post('patients', 'PatientController@store');


Route::resource('posts', 'PostsController');
Route::put('posts/edit/','PostsController@update');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
