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
    return view('index');
});

Route::resource('users', 'UserController');

Route::resource('apps', 'AppController');

Route::get('apps/user/{user}', 'AppController@select')->name('apps.select');

Route::post('apps/user/{user}', 'AppController@assign')->name('apps.assign');

Route::resource('teachers', 'TeacherController');

Route::resource('students', 'StudentController');

Route::resource('technicians', 'TechnicianController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');