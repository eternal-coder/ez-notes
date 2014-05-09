<?php
Route::get('/', array('before' => 'auth', 'uses' => 'HomeController@showHome'));

Route::get('/login', function() {
    return View::make('login');
});
