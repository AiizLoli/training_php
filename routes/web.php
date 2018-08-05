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

Route::get('Kuy', function () {
return 'Hello World';
});

Route::post('demotwo', 'DemoController@demotwo');

Route::match(['get', 'post'], 'demothree', 'DemoController@demothree');

Route::any('/demofour', 'DemoController@demofour');

Route::get('demofive/{id}', function ($id) {
    return 'ID: '.$id;
});

Route::get('demosix/{id}/{name}', function ($id, $name) {
    return 'ID: '.$id.' || NAME: '.$name;
});

Route::get('demoseven/{id}', function ($id) {
    return 'demoseven ID: '.$id;
})->where('id', '[0-9]+');

Route::get('demoeight/{name}', function ($name) {
    return 'demoeight NAME: '.$name;
})->where('name', '[A-Za-z]+');

Route::get('demonine/{id}/{name}', function ($id, $name) {
    return 'demonine ID: '.$id.' || NAME: '.$name;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

Route::get('/testlinenoti', 'DemoController@testlinenoti');
Route::get('/testexcel', 'DemoController@testexcel');

Route::resource('photos', 'PhotoController');

Route::prefix('admin')->middleware('auth')->group(function () {
	Route::get('demoone', 'DemoController@index');
    Route::resource('users', 'Admin\UsersController');
});

Route::get('login', 'LoginController@index')->name('login');
Route::get('logout', 'LoginController@logout');
Route::post('login', 'LoginController@authenticate');
