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

Route::view('', 'home');
Route::view('about', 'about');
Route::view('contact', 'contact');

Route::get('machines', 'MachinesPageController@index')->name('machines');
Route::get('projects', 'ProjectsPageController@index')->name('projects');
//Route::get('machines', 'MachineController@index');


/*Route::get('/services', 'MachinesController@index');
Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/{project}', 'ProjectsController@show');*/

