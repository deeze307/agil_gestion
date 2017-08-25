<?php
// Usar la estructura de groups con prefix para definir las rutas.
Route::group([
    'prefix'=>'deposito',
    'namespace'=>'Deposito'
    ],function(){

    Route::get('/',[
        'as'=>'deposito.home',
        'uses'=>'DepositoController@index'
    ]);

    Route::get('/all','DepositoController@depositoAll');
});




