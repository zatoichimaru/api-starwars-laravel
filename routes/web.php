<?php
Route::get('/', 'FilmsController@index');
Route::get('filmes/{id}', 'FilmsController@findById')->where('id', '[0-9]+');
Route::get('filmes/{id}/{type}', 'FilmsController@find')->where(['id' => '[0-9]+', 'type'=> '[A-Za-z]+']);
Route::get('filmes/buscar/{search}', 'FilmsController@findByTitle')->where('search', '[A-Za-z ]+');
