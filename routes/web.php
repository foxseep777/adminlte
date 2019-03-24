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

/*oute::get('/', function () {
    return view('welcome');
});*/


Route::get('/', 'Users@index');
Route::post('/adduser', 'Users@adduser');
Route::post('/addcompany', 'Companies@addcompany');
Route::get('/generate', 'Report@generateData')->middleware('auth');
Route::get('/report', 'Report@report');
Route::get('/reportAbusers', 'Report@reportListAbusers');
Route::get('/companiesList', 'Companies@index');
Route::get('/abusers', 'Report@index');

Auth::routes();

Route::get('/home', 'HomeController@index');



Route::resource('companies', 'CompanyController');




Route::resource('users', 'UserController');