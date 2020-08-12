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
    return view('welcome');
});



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'teacher'],function(){
    Route::get('/','TeacherController@index')->name('teacher.home');
    Route::get('/login', 'AuthTeacher\LoginController@showLoginForm')->name('teacher.login');
    Route::post('/login', 'AuthTeacher\LoginController@login')->name('teacher.login.submit');
});
