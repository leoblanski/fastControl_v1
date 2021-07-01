<?php


Route::get('/', 'homeController@home');

Route::get('/product', 'productController@home');
Route::get('/getProduct/{description}', 'productController@getProducts');
