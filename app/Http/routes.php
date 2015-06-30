<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */
  // Route::any("login/editprofile/{id?}", "UsersController@Editprofile");
    Route::controller('/login', 'UsersController');
   Route::controller('/', 'UsersController');



Route::get('login/editprofile/{id?}', [
    'middleware' => 'user',
    'uses' => 'UsersController@Editprofile'
]);

Route::get('login/userlist', [
    'middleware' => 'user',
    'uses' => 'UsersController@Userlist'
]);
  







