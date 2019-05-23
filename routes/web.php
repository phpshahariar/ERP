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


Route::get('/admin', 'AdminController@admin')->middleware('auth','admin');

Route::get('/create/project', 'AdminController@create_project');
Route::post('/save/project', 'AdminController@save_project');
Route::get('/edit/project/{id}', 'AdminController@edit_project');
Route::post('/update/project', 'AdminController@update_project');
Route::get('/project/delete/{id}', 'AdminController@delete_project');

Route::get('/agent','AgentController@agent')->middleware('auth','agent');

Route::get('/customer','CustomerController@customer')->middleware('auth','customer');