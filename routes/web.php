<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;


//Auth::routes();

Route::get('/', 'GuestController@home')->name('home');
Route::get('/postcards/create','GuestController@createpPostcard')->name('postcard.create');
Route::post('/postcards/store','GuestController@storePostcard')->name('postcard.store');

//-------------------------------------------------------------

Route::get('/api/postcards/list', 'ApiController@getPostcards')->name('api.postcards.list');

