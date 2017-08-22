<?php

namespace IAServer\Http\Controllers\Auth\Entrust;


use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'agil_gestion.profile';
    public $timestamps = false;

    public function fullname()  {
        return trim($this->nombre).', '.trim($this->apellido);
    }

    public function email() {
        return $this->email;
    }
}
