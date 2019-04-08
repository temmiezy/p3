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

Route::get('/', 'TicketsController@home');
Route::get('/contact', 'TicketsController@contact');


Route::get('/tickets/create', 'TicketsController@create');
Route::post('/tickets', 'TicketsController@store');

Route::get('/tickets/search', 'TicketsController@search');
Route::get('/tickets/search-process', 'TicketsController@searchProcess');

Route::get('/tickets', 'TicketsController@index');
Route::get('/tickets{title}', 'TicketsController@index');

Route::fallback(function() {
    return 'The page you requested cannot be found!';
});


