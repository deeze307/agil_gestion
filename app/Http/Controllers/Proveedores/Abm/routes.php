<?php

Route::group([
    'prefix'=>'proveedores',
    'namespace'=>'Proveedores\Abm'
],function(){

    Route::get('/index','CRUDProveedores@index');

    Route::post('/create','CRUDProveedores@create');

    Route::post('/update','CRUDProveedores@update');

    Route::get('/show','CRUDProveedores@show');

    Route::get('/edit','CRUDProveedores@edit');

    Route::get('/destroy/{id}','CRUDProveedores@destroy');
});

