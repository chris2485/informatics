<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

//Marketing Site
Route::get('/', 'MainController@home');
Route::get('/2', 'MainController@home2');
Route::get('/exam', 'MainController@brainTest');

//Blog Site
Route::get('test', 'BlogsController@test');
Route::get('/blog', 'BlogsController@index');
Route::get('/blog/compose', 'BlogsController@compose');
Route::post('/blog/submitArticle', 'BlogsController@addArticle');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
