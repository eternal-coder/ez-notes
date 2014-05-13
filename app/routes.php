<?php
Route::get('/', array('before' => 'auth', 'uses' => 'HomeController@showHome'));

Route::get('/login', 'LoginController@index');
