<?php

namespace IAServer\Http\Controllers\IAServer\Model;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $connection = 'agil_gestion';
    protected $table = 'agil_gestion.menu';
    public $timestamps = false;
}
