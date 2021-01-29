<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'BrandController@index') -> name('brand-index');

//Route::get('/axios/getAllBrands', 'BrandController@getAllBrands') -> name('axios-get-all-brands');
//definisce una api

Route::get('/brand/{id}', 'BrandController@show') -> name('brand-show');
