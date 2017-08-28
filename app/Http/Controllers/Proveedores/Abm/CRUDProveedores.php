<?php

namespace IAServer\Http\Controllers\Proveedores\Abm;

use IAServer\Http\Controllers\Proveedores\Model\Proveedores;
use IAServer\Http\Controllers\Proveedores\ProveedoresController;
use Illuminate\Http\Request;

use IAServer\Http\Requests;
use IAServer\Http\Controllers\Controller;

class CRUDProveedores extends ProveedoresController
{
    public static function getProveedoresAll()
    {
        return Proveedores::all();
    }
}
