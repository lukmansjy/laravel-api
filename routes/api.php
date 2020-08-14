<?php

use Illuminate\Support\Facades\Route;

Route::post('register', 'Auth\RegisterController');
Route::post('login', 'Auth\LoginController');

Route::get('user', 'UserController');