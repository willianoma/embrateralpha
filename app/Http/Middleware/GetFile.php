<?php

class Getfile
{

    public function ola()
    {

        $calculofaltas = new CalculoFaltas();


        $arquivo = fopen('teste.txt', 'r');

        while (!feof($arquivo)) {

            $linha = fgets($arquivo);
            $piece = explode("|", $linha);

            $calculofaltas::$referencia = $piece[0];
            $calculofaltas::$codigoevento = $piece[1];
            $calculofaltas::$faltas = $piece[2];
            $calculofaltas::$dataInicio = $piece[3];
            $calculofaltas::$dataFinal = $piece[4];

        }


        fclose($arquivo);

        return $calculofaltas;

    }

}
