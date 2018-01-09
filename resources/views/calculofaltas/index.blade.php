@extends('layout')

<H1>Aqui index calculo faltas</H1>


<table class="table table-condensed table-striped">
    <tr>
        <th>Matricula</th>
        <th>Codigo Evento</th>
        <th>Faltas</th>
        <th>Data Inicio</th>
        <th>Data Final</th>
        <th>Nome</th>
        <th>Tipo Horario</th>


    </tr>

    <?php

    var_dump($calculoFaltas);

   /* foreach ($calculoFaltas as $calculo) {
        echo "<tr>";
        echo "<th>$calculo->referecia</th>";
        echo "<th>$calculo->codigoevento</th>";
        echo "<th>$calculo->faltas</th>";
        echo "<th>$calculo->datainicio</th>";
        echo "<th>$calculo->datafinal</th>";
        echo "<th>$calculo->nomeFuncionario</th>";
        echo "<th>$calculo->tipoHorarioFuncionario</th>";
        echo "</tr>";

    }*/



   /* $arquivo = fopen('teste.txt', 'r');


    foreach ($funcionarios as $funcionario) {

    }

    while (!feof($arquivo)) {
        $linha = fgets($arquivo);
        $piece = explode("|", $linha);

        echo "<tr>";
        echo "<th>$piece[0]</th>";
        echo "<th>$piece[1]</th>";
        echo "<th>$piece[2]</th>";
        echo "<th>$piece[3]</th>";
        echo "<th>$piece[4]</th>";
        echo "</tr>";


    }
    fclose($arquivo);*/


    ?>
</table>
