<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home')
    -> name('home');

Route::get('movie/{id}', 'HomeController@movie')
    -> name('movie');

