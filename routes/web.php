<?php

Route::feeds();
//Admin Routes
Auth::routes();
//----------front end front end----------//
Route::get('/', 'HomeController@index');
Route::get('{slug}', 'HomeController@article')->name('articleDetails');
Route::get('/category/{slug}', 'HomeController@category')->name('categoryDetails');
Route::get('/tag/{slug}', 'HomeController@tag')->name('tag');
Route::get('story/{id}', 'HomeController@story');
