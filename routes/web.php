<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', 'PostController@index') ->name('home');
Route::get('/api/posts/all', 'PostApiController@getAllData') -> name('getAllData');
Route::get('/api/posts/bestOf', 'PostApiController@getBestPost') -> name('getBestPost');

Route::get('/create', 'PostController@create') -> name ('pos-create');
Route::post('/store', 'PostController@store') -> name ('pos-store');

