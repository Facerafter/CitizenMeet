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
    $events = \App\MyEvent::orderBy('date', 'desc')->take(9)->get();
    return view('welcome', compact('events'));
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/submit', 'MyEventController@create');

Route::get('/events', 'MyEventController@index');

Route::get('/eventmap', function()
{
    return view('eventmap');
});
