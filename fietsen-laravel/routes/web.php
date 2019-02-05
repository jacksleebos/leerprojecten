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


/*
get /bikes (index)
get /bikes/create (create)
get /bikes/1 (show)
post /bikes (store)
get /bikes/1/edit (edit)
patch /bikes/1 (update)
delete /bikes/1 (destroy)
*/
//Route::resource('bikes', 'bikesController');

Route::get('/bikes/index', 'bikesController@index');
 Route::get('/bikes/create', 'bikesController@create');
 Route::get('/bikes/{bikes}', 'bikesController@show');
 Route::post('/bikes/index', 'bikesController@store');
 Route::get('/bikes/{bikes}/edit' , 'bikesController@edit');
 Route::patch('/bikes/{bikes}', 'bikesController@update');
 Route::delete('/bikes/{bikes}/edit' , 'bikesController@destroy');


