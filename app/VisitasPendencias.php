<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class VisitasPendencias extends Model
{

    public function getVisita()
    {
        return $this->belongsTo('App\Visita', 'idvisita', 'id');
    }

    public function getPosto()
    {
        return $this->hasOne('App\Posto', 'id', 'idposto');
    }

    public function getUsuario()
    {
        return $this->hasOne('App\User', 'id', 'idusuario');
    }

}
