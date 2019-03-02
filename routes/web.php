<?php

Route::get('/', 'PagesController@index')->name('root');
Route::get('/contact', 'PagesController@contact')->name('contact')->middleware('auth');
Route::get('/about', 'PagesController@about')->name('about');

Route::resource('/rooms', 'RoomController');
Route::resource('/types', 'TypeController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/{user}/rooms', 'UserRoomController@index')->name('userrooms.index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
