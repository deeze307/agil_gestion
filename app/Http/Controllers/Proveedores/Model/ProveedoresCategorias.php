<?php

namespace IAServer\Http\Controllers\Proveedores\Model;

use Illuminate\Database\Eloquent\Model;

class ProveedoresCategorias extends Model
{
    protected $connection = 'agil_gestion';
    protected $database ='agil_gestion_proveedores';
    protected $table = 'agil_gestion_proveedores.proveedores_categorias';
}
