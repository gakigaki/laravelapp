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
Route::get('/person', 'PersonController@index')->middleware('auth');
Route::get('/person/find', 'PersonController@find');
Route::post('/person/find', 'PersonController@search');

Route::get('person/auth', 'PersonController@getAuth');
Route::post('person/auth', 'PersonController@postAuth');

Route::get('/board', 'BoardController@index');
Route::get('/board/add', 'BoardController@add');
Route::post('/board/add', 'BoardController@create');

// use App\Http\Middleware\HelloMiddleware;
//
// Route::get('/hello', 'HelloController@index');
// Route::post('/hello', 'HelloController@add');
//
// Route::get('/hello/list', 'HelloController@list');
// Route::post('/hello/update', 'HelloController@update');
// Route::post('/hello/delete', 'HelloController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
