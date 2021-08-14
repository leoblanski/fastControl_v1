<?php


Route::get('/', 'homeController@home');

Route::get('/product', 'productController@home');
Route::get('/getProduct', 'productController@getProducts');
