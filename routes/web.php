<?php


Route::get("/","WebController@index");
Route::get("/{slug}","WebController@sections");
