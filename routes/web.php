<?php


Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//movie routes
Route::post('/movies/{movie}/increment_views', 'MovieController@increment_views')->name('movies.increment_views');
Route::post('/movies/{movie}/toggle_favorite', 'MovieController@toggle_favorite')->name('movies.toggle_favorite');
Route::resource('movies', 'MovieController')->only(['index', 'show']);

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider')->where('provider', 'facebook|google');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->where('provider', 'facebook|google');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
