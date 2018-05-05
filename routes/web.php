<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Sistemden Mail atmak için
Route::get('contact','ContactController@Show');
Route::post('contact','ContactController@mail');
