<?php

use Illuminate\Support\Facades\Route;

Route::get('/brands', 'BrandController@index') -> name('brand-index');

//Route::get('/axios/getAllBrands', 'BrandController@getAllBrands') -> name('axios-get-all-brands');
//definisce una api

Route::get('/brand/{id}', 'BrandController@show') -> name('brand-show');


Route::get('/workers', 'WorkerController@index') -> name('workers-index');

Route::get('/worker/{id}', 'WorkerController@show') -> name('worker-show');
