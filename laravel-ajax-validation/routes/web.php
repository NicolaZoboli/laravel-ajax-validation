<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PostController@index') -> name('post.index');

Route::get('/post/create', 'PostController@create') -> name('post.create');
Route::post('/post/store', 'PostController@store') -> name('post.store');

Route::get('/api/posts/all', 'PostApiController@getAllPost') -> name('post.api.all');
Route::get('/api/posts/best-of', 'PostApiController@getBestPost') -> name('post.api.best');
