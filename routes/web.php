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
    return view('auth/login');
});
Route::resource('/cargos', 'CargoController');
Route::resource('/aula', 'AulaController');
Route::resource('/alumno', 'AlumnoController');
Route::resource('/profesor', 'ProfesorController');
Route::resource('/curso', 'CursoController');
Route::resource('/horario', 'HorarioController');
Route::resource('/inicio', 'InicioController');
Route::get('logout','Auth\LoginController@logout');
Auth::routes();

Route::get('login/facebook', 'Auth\LoginController@redirectToProviderFacebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderFacebookCallback');
Route::get('login/google', 'Auth\LoginController@redirectToProviderGoogle');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderGoogleCallback');
Route::get('login/github', 'Auth\LoginController@redirectToProviderGithub');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderGithubCallback');

Route::get('/home', 'HomeController@index')->name('home');
