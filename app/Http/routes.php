<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'BooksController@index');

// 表示
Route::get('/books/{id}', 'BooksController@show');
Route::get('/books', 'BooksController@page');

// User 定義

Route::group(['middleware' => 'auth', 'prefix' => 'books'], function() {

	Route::get('/add/{id}', 'BooksController@add');
	Route::post('/create', 'BooksController@create');

	// 編集
	Route::get('/edit/{id}', 'BooksController@edit');
	Route::post('/update/{id}', 'BooksController@update');

	// 削除
	Route::get('/delete', 'BooksController@delete');

	// コメント
	Route::post('/books/{book_id}/{user_id}/comments', 'CommentsController@store');

});

// 認証のルート定義…
Route::get('/auth/login', 'Auth\AuthController@getLogin');
Route::post('/auth/login', 'Auth\AuthController@postLogin');
Route::get('/auth/logout', 'Auth\AuthController@getLogout');

// 登録のルート定義…
Route::get('/auth/register', 'Auth\AuthController@getRegister');
Route::post('/auth/register', 'Auth\AuthController@postRegister');

Route::group(['middleware' => 'auth', 'prefix' => 'my-page'], function() {
	Route::get('/', 'UserController@edit');
	Route::post('/update/{id}', 'UserController@update');
});