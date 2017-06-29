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

Route::get('/employee', 'EmployeeController@get');
Route::post('/employee', 'EmployeeController@post');

Route::get('/company', 'CompanyController@get');
Route::post('/company', 'CompanyController@post');

Route::get('/work-history', 'WorkHistoryController@get');
Route::post('/work-history', 'WorkHistoryController@post');