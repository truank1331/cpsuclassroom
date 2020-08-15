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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('teacher/home','TeacherController@index')->name('teacher.home');
Route::group(['prefix' => 'teacher'],function(){
    
    Route::get('/login', 'AuthTeacher\LoginController@showLoginForm')->name('teacher.login');
    Route::post('/login', 'AuthTeacher\LoginController@login')->name('teacher.login.submit');
    
});

Auth::routes(['verify' => true]);



    


