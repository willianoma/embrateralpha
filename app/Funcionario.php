<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\FuncionariosFilhos;

class Funcionario extends Model
{

    public function getFilhos()
    {
        return $this->hasMany('App\FuncionariosFilhos', 'idfuncionario', 'id');
    }

}
