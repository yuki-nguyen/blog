<?php

/*Route::get('/tasks', 'TaskController@index');
Route::get('/tasks/{task}', 'TaskController@show');*/


// Eloquent model: Post

//controller: PostsController

//migration: create_posts_table

Route::get('/', 'PostController@index');
//Route::get('/posts/{post}', 'PostController@show');
Route::get('/posts/create', 'PostController@create');