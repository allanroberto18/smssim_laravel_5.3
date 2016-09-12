<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function(){
    Route::get('', [
        'as' => 'home',
        'uses' => 'DashboardController@index'
    ]);
    Route::group(['prefix' => 'usuarios', 'as' => 'users.'], function(){
        Route::get('', [
            'as' => 'index',
            'uses' => 'UserController@index',
        ]);
        Route::get('create', [
            'as' => 'create',
            'uses' => 'UserController@create',
        ]);
        Route::get('show/{id}', [
            'as' => 'show',
            'uses' => 'UserController@show',
        ]);
        Route::get('print/{id}', [
            'as' => 'print',
            'uses' => 'UserController@print',
        ]);
        Route::get('edit/{id}', [
            'as' => 'edit',
            'uses' => 'UserController@edit',
        ]);
        Route::get('destroy/{id}', [
            'as' => 'destroy',
            'uses' => 'UserController@destroy',
        ]);
        Route::post('store', [
            'as' => 'store',
            'uses' => 'UserController@store',
        ]);
        Route::post('destroy', [
            'as' => 'destroy_selected',
            'uses' => 'UserController@destroyBySelection',
        ]);
        Route::post('update/{id}', [
            'as' => 'update',
            'uses' => 'UserController@update',
        ]);
    });
    Route::group(['prefix' => 'servicos', 'as' => 'services.'], function(){
        Route::get('', [
            'as' => 'index',
            'uses' => 'ServiceController@index',
        ]);
        Route::get('create', [
            'as' => 'create',
            'uses' => 'ServiceController@create',
        ]);
        Route::get('show/{id}', [
            'as' => 'show',
            'uses' => 'ServiceController@show',
        ]);
        Route::get('print/{id}', [
            'as' => 'print',
            'uses' => 'ServiceController@print',
        ]);
        Route::get('edit/{id}', [
            'as' => 'edit',
            'uses' => 'ServiceController@edit',
        ]);
        Route::get('destroy/{id}', [
            'as' => 'destroy',
            'uses' => 'ServiceController@destroy',
        ]);
        Route::post('store', [
            'as' => 'store',
            'uses' => 'ServiceController@store',
        ]);
        Route::post('destroy', [
            'as' => 'destroy_selected',
            'uses' => 'ServiceController@destroyBySelection',
        ]);
        Route::post('update/{id}', [
            'as' => 'update',
            'uses' => 'ServiceController@update',
        ]);
    });
});