<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('/login');
});
Route::get('/login', 'AuthorizationController@index');
Route::post('/authorization/login', 'AuthorizationController@login');

Route::group(['middleware' => ['auth']], function () {
    
    Route::post('/authorization/logout', 'AuthorizationController@logout');

    Route::get('/home', 'HomeController@index');
    Route::post('/home/action', 'HomeController@action');

});