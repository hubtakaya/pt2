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


//Route::post('api/github', ['middleware' => 'github.secret.token', 'uses' => 'GithubController@githubUpdate']);

Route::get('/', 'BooksController@index');
Route::get('/farewell', 'AdController@index');

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

// Forget Password
Route::get('/auth/forget-password', 'Auth\PasswordController@SendMail');
Route::post('/password/email', 'Auth\PasswordController@sendResetLinkEmail');

// 登録のルート定義…
Route::get('/auth/register', 'Auth\AuthController@getRegister');
Route::post('/auth/register', 'Auth\AuthController@postRegister');

Route::group(['middleware' => 'auth', 'prefix' => 'my-page'], function() {
	Route::get('/', 'UserController@edit');
	Route::post('/update/{id}', 'UserController@update');

	// 投稿した本一覧
	Route::get('/my-books', 'UserController@myBooks');
});

// Route::auth();
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

/**
 * Social Login
 * 
 *
 */

// FB ログイン (ボタンのリンク先)
	Route::get('/facebook', 'Auth\FacebookAuthController@facebookLogin');
	// Route::get('/facebook', 'BooksController@index');

	// 認証後の戻りURL
	Route::get('/facebook/callback', 'Auth\FacebookAuthController@facebookCallback');

/**
 * Laravel\Socialite Github に上がっているやり方。
 * 
 * Route::get('auth/facebook', 'Auth\AuthController@FacebookRedirectToProvider');
 * Route::get('auth/facebook/callback', 'Auth\AuthController@FacebookHandleProviderCallback');
 */