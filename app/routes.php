<?php
Route::get('/', array('before' => 'auth', 'uses' => 'HomeController@showHome'));
Route::get('/login', 'LoginController@index');
Route::post('login/register', 'LoginController@register');
Route::post('login/login', 'LoginController@login');
