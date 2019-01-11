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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mushroom/{id}', ['as' => 'mushroom', 'uses' => 'MushroomController@index']);

Route::get('/createMushroom', ['as' => 'createMushroom', 'uses' => 'CreateMushroomController@index']);
Route::post('/createMushroom', ['as' => 'createMushroom', 'uses' => 'CreateMushroomController@addMushroom']);

Route::post('/mushroomList', ['as' => 'mushroomList', 'uses' => 'MushroomListController@addMushroom']);
Route::get('/mushroomList/{id_mush}', 'MushroomListController@deleteMushroom');
Route::get('/updateMushroom', ['as' => 'updateMushroom', 'uses' => 'UpdateMushroomController@index']);
Route::post('/updateMushroom', ['as' => 'updateMushroom', 'uses' => 'UpdateMushroomController@updateMushroom']);
Route::post('/mushroomList', ['as' => 'mushroomList', 'uses' => 'MushroomListController@addMushroom']);
