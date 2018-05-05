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
Route::get('/person', 'PersonController@index');
Route::get('/person/add', 'PersonController@add');
Route::get('/person/find', 'PersonController@find');
Route::post('/person/find', 'PersonController@search');

Route::get('/board', 'BoardController@index');
Route::get('/board/add', 'BoardController@add');
Route::post('/board/add', 'BoardController@create');

Route::apiResource('shits', 'API\ShitController');

// use App\Http\Middleware\HelloMiddleware;
//
// Route::get('/hello', 'HelloController@index');
// Route::post('/hello', 'HelloController@add');
//
// Route::get('/hello/list', 'HelloController@list');
// Route::post('/hello/update', 'HelloController@update');
// Route::post('/hello/delete', 'HelloController@delete');
