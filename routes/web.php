<?php

use Illuminate\Support\Facades\Route;


//Auth::routes();

Route::get('/', 'GuestController@home')->name('home');
