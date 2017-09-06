<?php

namespace IAServer\Http\Controllers\Proveedores\Abm;

use IAServer\Http\Controllers\Proveedores\Model\Proveedores;
use IAServer\Http\Controllers\Proveedores\ProveedoresController;
use Illuminate\Http\Request;

use IAServer\Http\Requests;
use IAServer\Http\Controllers\Controller;

class CRUDProveedores extends ProveedoresController
{
    public static function getProveedoresAll($owner_user_id)
    {
        return Proveedores::where('id_owner',$owner_user_id)->get();
    }

    public static function create($proveedor)
    {

    }

    public static function show($id)
    {
        return Proveedores::find($id)->get();
    }

    public static function update($upd)
    {
        $proveedor = Proveedores::find($upd->id)->get();
        $proveedor->nombre = $upd->nombre;
        $proveedor->apellido = $upd->apellido;
    }

    public static function destroy($id)
    {
        Proveedores::destroy($id);

    }
}
