<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CalculoFaltas extends Model


{

    public $referencia;
    public $codigoevento;
    public $faltas;
    public $dataInicio;
    public $dataFinal;
    public $nomeFuncionario;
    public $tipoHorarioFuncionario;
    /**
     * @return mixed
     */
    public function getNomeFuncionario()
    {
        return $this->nomeFuncionario;
    }

    /**
     * @param mixed $nomeFuncionario
     */
    public function setNomeFuncionario($nomeFuncionario)
    {
        $this->nomeFuncionario = $nomeFuncionario;
    }

    /**
     * @return mixed
     */
    public function getTipoHorarioFuncionario()
    {
        return $this->tipoHorarioFuncionario;
    }

    /**
     * @param mixed $tipoHorarioFuncionario
     */
    public function setTipoHorarioFuncionario($tipoHorarioFuncionario)
    {
        $this->tipoHorarioFuncionario = $tipoHorarioFuncionario;
    }

    /**
     * @return array
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * @param array $referencia
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;
    }

    /**
     * @return mixed
     */
    public function getCodigoevento()
    {
        return $this->codigoevento;
    }

    /**
     * @param mixed $codigoevento
     */
    public function setCodigoevento($codigoevento)
    {
        $this->codigoevento = $codigoevento;
    }

    /**
     * @return mixed
     */
    public function getFaltas()
    {
        return $this->faltas;
    }

    /**
     * @param mixed $faltas
     */
    public function setFaltas($faltas)
    {
        $this->faltas = $faltas;
    }

    /**
     * @return mixed
     */
    public function getDataInicio()
    {
        return $this->dataInicio;
    }

    /**
     * @param mixed $dataInicio
     */
    public function setDataInicio($dataInicio)
    {
        $this->dataInicio = $dataInicio;
    }

    /**
     * @return mixed
     */
    public function getDataFinal()
    {
        return $this->dataFinal;
    }

    /**
     * @param mixed $dataFinal
     */
    public function setDataFinal($dataFinal)
    {
        $this->dataFinal = $dataFinal;
    }

    //


}
