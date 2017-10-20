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

    //CRUD


    Route::get('/prompt','ProveedoresController@prompt');
});

//  **** CRUD ****
require('Abm/routes.php');

