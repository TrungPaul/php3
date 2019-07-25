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
 Route::get('/login', function () {
    return 'hello world';
});
 route::get('students','studentController@index')->name('students');

Route::get('input', 'SomeController@sumView')->name('sum-view');
Route::post('sum', 'SomeController@tong')->name('sum');
route::get('classes','ClassController@index')->name('classes');
Route::get('table', function () {
    return view('table');
});
Route::get('users', function () {
    return view('user ');
});
Route::get('master', function () {
    return view('admin.master');
});
