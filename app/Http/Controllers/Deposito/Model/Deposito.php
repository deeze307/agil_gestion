<?php

namespace IAServer\Http\Controllers\Deposito\Model;

use Illuminate\Database\Eloquent\Model;

class Deposito extends Model
{
    protected $connection = 'agil_gestion';
    protected $database ='agil_gestion_deposito';
    protected $table = 'agil_gestion_deposito.deposito';
}
