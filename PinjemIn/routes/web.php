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
    return view('index');
});

route::get('/profile',function(){
    return view('profile');
});

route::get('/company',function(){
    return view('company');
});

route::get('/collaboration',function(){
    return view('collaboration');
});

route::get('/service',function(){
    return view('service');
});

route::get('/list','UserController@index');
route::post('/list-create','UserController@create');
route::get('/list/{id}/edit','UserController@edit');
route::post('/list/{id}/update','UserController@update');
route::get('/list/{id}/delete','UserController@delete');