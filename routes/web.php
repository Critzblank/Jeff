<?php

Route::get('/', 'PostsController@index');



//Route::get('/tasks', 'TasksController@index');

//Route::get('/tasks/{task}', 'TasksController@show');

//Route::get('/tasks/table', 'TaskController@table');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/calendar', 'PostsController@calendar');

Route::get('/posts/{post}/edit', 'PostsController@edit');

Route::patch('/posts/{post}/edit', 'PostsController@update');

Route::delete('/posts/{post}/delete', 'PostsController@delete');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
