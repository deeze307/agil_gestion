<?php

namespace IAServer\Http\Controllers\Deposito;

use IAServer\Http\Controllers\IAServer\Model\Deposito;
use Illuminate\Http\Request;

use IAServer\Http\Requests;
use IAServer\Http\Controllers\Controller;

class ABMDeposito extends DepositoController
{
    public static function getDepositoAll()
    {
        return Deposito::all();
    }
}
