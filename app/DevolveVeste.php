<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class DevolveVeste extends Model
{

    public function getVeste()
    {
        return $this->hasmany('App\Veste', 'id', 'idveste');
    }

    public function getUser()
    {
        return $this->hasOne('App\User', 'id', 'iduser');
    }

    public function getFuncionario()
    {
        return $this->hasOne('App\Funcionario', 'id', 'idfuncionario');
    }

    public function getEntregaVeste()
    {
        return $this->hasOne('App\EntregaVeste', 'id', 'identrega');
    }

}
