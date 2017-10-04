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

Route::get('/post/create','PostsController@create');

Route::get('/', 'MainController@index');

Route::post('/post/store','PostsController@store');

Route::get('/tasks/{task}','MainController@show');

Route::post('/post/{post}/comments','PostsController@addComments');

Route::get('/register','UserController@create');
Route::post('/register','UserController@store');
Route::get('/login','UserController@login');
Route::post('/login','UserController@do_login');
Route::get('/logout','UserController@logout');


Route::get('/about',function(){
	return view('about');
});