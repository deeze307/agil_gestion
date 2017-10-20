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
        return view('proveedores.index');
    }

    public static function prompt()
    {
        return view('proveedores.common.prompt');
    }
}
