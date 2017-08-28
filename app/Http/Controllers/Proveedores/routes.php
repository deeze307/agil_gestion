<?php
// Usar la estructura de groups con prefix para definir las rutas.
Route::group([
    'prefix'=>'proveedores',
    'namespace'=>'Proveedores'
],function(){

    Route::get('/',[
        'as'=>'proveedores.home',
        'uses'=>'ProveedoresController@index'
    ]);

    Route::get('/all','ProveedoresController@proveedoresAll');
});


