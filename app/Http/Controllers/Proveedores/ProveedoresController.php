<?php

namespace IAServer\Http\Controllers\Proveedores;

use IAServer\Http\Controllers\Proveedores\Abm\CRUDProveedores;
use Illuminate\Http\Request;

use IAServer\Http\Requests;
use IAServer\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class ProveedoresController extends Controller
{

    public static function index()
    {
        $user = Auth::user();
        $deposito = new CRUDProveedores();
        $datos = $deposito->getProveedoresAll($user->profile->owner_user_id);
        $output = compact('datos');
        return view('proveedores.index',$output);
    }
}
