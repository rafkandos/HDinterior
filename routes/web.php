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

// Route::get('/', function () {
//     return view('welcome');
// });=

Route::get('/', function () {
    return view('index');
});
Route::get('home', function () {
    return view('index');
});

Route::get('project', 'ProjectController@index');
Route::get('project/kitchenset', 'ProjectController@kitchenset');

Route::get('login', function(){
    return view('admin/login');
});

Route::get('admins', 'AdminController@index');
Route::post('do_login', 'AdminController@do_login');
Route::get('logout', 'AdminController@logout');

Route::get('type', 'TypeController@index');
Route::post('type/add', 'TypeController@addType');