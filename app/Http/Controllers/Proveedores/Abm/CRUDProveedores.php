<?php

namespace IAServer\Http\Controllers\Proveedores\Abm;

use IAServer\Http\Controllers\Proveedores\Model\Proveedores;
use IAServer\Http\Controllers\Proveedores\ProveedoresController;
use Illuminate\Http\Request;

use IAServer\Http\Requests;
use IAServer\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;
use Mockery\CountValidator\Exception;

class CRUDProveedores extends ProveedoresController
{
    public static function index()
    {
        $user = Auth::user();
        return Proveedores::select(
            'proveedores.id',
            'proveedores.nombre',
            'proveedores.apellido',
            'proveedores.nombre_fantasia',
            'proveedores.direccion',
            'proveedores.localidad',
            'proveedores.telefono',
            'proveedores.id_categoria',
            'pc.nombre as nombre_categoria',
            'proveedores.id_owner')
            ->join('agil_gestion_proveedores.proveedores_categorias as pc','proveedores.id_categoria','=','pc.id')
            ->where('proveedores.id_owner',$user->profile->owner())
            ->get();

    }

    public static function create(Request $request)
    {
        try
        {
            $req = $request->all();
            $user = Auth::user();
            $proveedores = new Proveedores();
            $proveedores->nombre = $req['nombre'];
            $proveedores->apellido = $req['apellido'];
            $proveedores->nombre_fantasia = $req['nombre_fantasia'];
            $proveedores->direccion = $req['direccion'];
            $proveedores->localidad = $req['localidad'];
            $proveedores->telefono = $req['telefono'];
            $proveedores->id_categoria = $req['id_categoria'];
            $proveedores->id_owner = $user->profile->owner();
            $proveedores->save();

            Cookie::queue(Cookie::make('proveedorCreado','Exito',1, null, null, null, false));
            return redirect('proveedores');

        }
        catch(Exception $ex)
        {
            Cookie::queue(Cookie::make('proveedorCreado','Error',1, null, null, null, false));
            return redirect('proveedores/index');
        }
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
        $proveedor->nombre_fantasia = $upd->nombre_fantasia;
        $proveedor->direccion = $upd->direccion;
        $proveedor->localidad = $upd->localidad;
        $proveedor->telefono = $upd->telefono;
        $proveedor->id_categoria = $upd->id_categoria;
        $proveedor->save();
    }

    public static function edit()
    {

    }

    public static function destroy($id)
    {
        try
        {
            Proveedores::destroy($id);
            return 'ok';
        }
        catch(Exception $ex)
        {
            return 'error';
        }

    }


}
