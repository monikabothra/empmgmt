<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::post('/welcome', function () {
    return view('welcome');
});
//department
Route::resource('department','DepartmentController');
Route::get('/department', 'departmentController@index')->name('department.index');
Route::get('/department/{id}/edit','departmentController@edit')->name('department.edit');
Route::get('/department/{id}/delete','departmentController@destroy')->name('department.destroy');
Route::get('/','departmentController@create');
Route::post('/department','departmentController@store');
Route::post('/department/update','departmentController@update');
//work
Route::resource('work', workController::class);
//employee
Route::resource('employee', employeeController::class);

//post api
Route::get('/post', 'postController@index')->name('post.index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
