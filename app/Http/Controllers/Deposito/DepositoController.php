<?php

namespace IAServer\Http\Controllers\Deposito;

use Illuminate\Http\Request;

use IAServer\Http\Requests;
use IAServer\Http\Controllers\Controller;

class DepositoController extends Controller
{
    public static function depositoAll()
    {
        $deposito = new ABMDeposito();
        $datos = $deposito->getDepositoAll();
        return compact('deposito.index','datos');
    }
}
