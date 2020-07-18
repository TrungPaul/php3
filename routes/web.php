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
Route::get('table', function () {
    return view('table');
});

Route::get('master', function () {
    return view('admin.master');
});
//class group
Route::group(
(['prefix' =>'classes', 'as'=> 'classes.']),
	function() {
		Route::get('/','ClassController@index')->name('list');
		Route::get('add', 'ClassController@createform')->name('add');
		Route::post('create-post', 'ClassController@create')->name('create');
		Route::get('{class}/edit', 'ClassController@editform')->name('edit');
		Route::post('update-post', 'ClassController@update')->name('update');
		Route::get('{class}/remove','ClassController@remove')->name('remove');

	}
);

