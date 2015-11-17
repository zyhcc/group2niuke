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

/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::any('foo', function()
{
    return 'Hello World';
});*/
Route::get('/','TestController@index');
Route::get('/test','TestController@test');
Route::get('article/add','ArticleController@add');
Route::post('article/save','ArticleController@save');


