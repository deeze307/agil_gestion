<?php

namespace IAServer\Http\Controllers\Proveedores;

use IAServer\Http\Controllers\Proveedores\Abm\CRUDProveedores;
use Illuminate\Http\Request;

use IAServer\Http\Requests;
use IAServer\Http\Controllers\Controller;

class ProveedoresController extends Controller
{
    public static function proveedoresAll()
    {
        $deposito = new CRUDProveedores();
        $datos = $deposito->getProveedoresAll();
        return view('proveedores.index',[$datos]);
    }
}
