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
Route::get('/todos', [
'uses' => 'TodosController@index',
'as' => 'home'
]);
Route::post('/create/todo', [
'uses' => 'TodosController@store'
]);
Route::get('/todo/delete/{id}', [
'uses' => 'TodosController@delete',
'as' => 'todo.delete'
]);
Route::get('/todos/update/{id}', [
'uses' => 'TodosController@update',
'as' => 'todo.update'
]);
Route::post('/todos/save/{id}', [
'uses' => 'TodosController@save',
'as' => 'todo.save'
]);
Route::get('/todos/completed/{id}', [
'uses' => 'TodosController@completed',
'as' => 'task.completed'
]);