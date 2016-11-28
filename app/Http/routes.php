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

// 追加
Route::get('/books/add', 'BooksController@add');
Route::post('/books/create', 'BooksController@create');

// 表示
Route::get('/books/{id}', 'BooksController@show');

// 編集
Route::get('/books/edit/{id}', 'BooksController@edit');
Route::post('/books/update/{id}', 'BooksController@update');

// 削除
Route::get('/books/delete', 'BooksController@delete');

// 認証のルート定義…
Route::get('/auth/login', 'Auth\AuthController@getLogin');
Route::post('/auth/login', 'Auth\AuthController@postLogin');
Route::get('/auth/logout', 'Auth\AuthController@getLogout');

// 登録のルート定義…
Route::get('/auth/register', 'Auth\AuthController@getRegister');
Route::post('/auth/register', 'Auth\AuthController@postRegister');