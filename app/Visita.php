<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Visita extends Model {

    public function getUsuario()
    {
        return $this->hasOne('App\User', 'id', 'idusuario');
    }
    public function getPosto()
    {
        return $this->hasOne('App\Posto', 'id', 'idposto');
    }
    public function getPendencias()
    {
        return $this->hasMany('App\VisitasPendencias', 'id', 'idvisita');
    }
}
