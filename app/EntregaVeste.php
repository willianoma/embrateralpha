<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class EntregaVeste extends Model
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

}
