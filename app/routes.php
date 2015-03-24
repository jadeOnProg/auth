<?php

Route::get('/', function()
{
 	return View::make('index');
});

//signIn
Route::post('/signin',array('uses'=>'AuthController@login'));
//logout
Route::get('/logout',array('uses'=>'AuthController@logout'));