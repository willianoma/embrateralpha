<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Funcionario;

class FuncionariosFilhos extends Model
{

    public function getFuncionario()
    {
        return $this->hasOne('App\Funcionario', 'id', 'idfuncionario');
    }

}
