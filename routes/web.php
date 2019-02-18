<?php


Route::get("/","WebController@index");
Route::get("/{slug}","WebController@sections");
Route::get("/posts/{slug}","WebController@post");
Route::get("/videos/{slug}","WebController@video");
Route::get("/freebies/{slug}","WebController@freebie");
Route::get("/store/categories","WebController@store");
Route::get("/store/{category}","WebController@category");
Route::get("/store/{category}/{product}","WebController@product");
