<?php
$girdWidth = 29;
$espaco = " ";
?>

<table border="0" style="width: 960px; border: solid">


    <tr id="grid">
        <th width="<? echo $girdWidth;?>"><? echo $espaco?></th>
        <th width="<? echo $girdWidth;?>"><? echo $espaco?></th>
        <th width="<? echo $girdWidth;?>"><? echo $espaco?></th>
        <th width="<? echo $girdWidth;?>"><? echo $espaco?></th>
        <th width="<? echo $girdWidth;?>"><? echo $espaco?></th>
        <th width="<? echo $girdWidth;?>"><? echo $espaco?></th>
        <th width="<? echo $girdWidth;?>"><? echo $espaco?></th>
        <th width="<? echo $girdWidth;?>"><? echo $espaco?></th>
        <th width="<? echo $girdWidth;?>"><? echo $espaco?></th>
        <th width="<? echo $girdWidth;?>"><? echo $espaco?></th>
        <th width="<? echo $girdWidth;?>"><? echo $espaco?></th>
        <th width="<? echo $girdWidth;?>"><? echo $espaco?></th>

        <th width="5"><? echo $espaco?></th>

        <th width="<? echo $girdWidth;?>"><? echo $espaco?></th>
        <th width="<? echo $girdWidth;?>"><? echo $espaco?></th>
        <th width="<? echo $girdWidth;?>"><? echo $espaco?></th>
        <th width="<? echo $girdWidth;?>"><? echo $espaco?></th>
        <th width="<? echo $girdWidth;?>"><? echo $espaco?></th>
        <th width="<? echo $girdWidth;?>"><? echo $espaco?></th>
        <th width="<? echo $girdWidth;?>"><? echo $espaco?></th>
        <th width="<? echo $girdWidth;?>"><? echo $espaco?></th>
        <th width="<? echo $girdWidth;?>"><? echo $espaco?></th>
        <th width="<? echo $girdWidth;?>"><? echo $espaco?></th>
        <th width="<? echo $girdWidth;?>"><? echo $espaco?></th>
        <th width="<? echo $girdWidth;?>"><? echo $espaco?></th>
    </tr>

    <tr id="Row1">
        <td colspan="8"><img height="30px" width="40px" src="logo.png" style="padding-left: 10px"></td>
        <th colspan="4"
            style="text-align: center; padding: 5px; border-bottom: solid; border-left:solid;">
            Id: {{$atestadomedico->id}}</th>

        <td style="border-right: solid; border-left: solid"></td>

        <td colspan="8"><img height="30px" width="40px" src="logo.png" style="padding-left: 10px"></td>
        <th colspan="4"
            style="text-align: center; padding: 5px; border-bottom: solid; border-left:solid ">
            Id: {{$atestadomedico->id}}</th>
    </tr>


    <tr id="Row2">
        <td colspan="12" style="text-align: left; padding: 5px; border-bottom: solid">
            <b>Funcionário:</b> {{$atestadomedico->funcionario}}</td>

        <td style="border-right: solid; border-left: solid"></td>

        <td colspan="12" style="text-align: left; padding: 5px; border-bottom: solid">
            <b>Funcionário:</b> {{$atestadomedico->funcionario}}</td>
    </tr>


    <tr id="Row3">
        <td colspan="12" style="; text-align: left; padding: 5px;border-bottom: solid;  ">
            <b>Posto:</b> {{$atestadomedico->posto}}</td>

        <td style="border-right: solid; border-left: solid"></td>

        <td colspan="12" style="; text-align: left; padding: 5px;border-bottom: solid;  ">
            <b>Posto:</b> {{$atestadomedico->posto}}</td>
    </tr>


    <tr id="Row4">
        <td colspan="12" style="text-align: left; padding: 5px; border-bottom: solid"><b>Obs.:</b> {{$atestadomedico->obs}}</td>

        <td style="border-right: solid; border-left: solid"></td>

        <td colspan="12" style="text-align: left; padding: 5px; border-bottom: solid"><b>Obs.:</b>{{$atestadomedico->obs}}</td>
    </tr>


    <tr id="Row5">
        <td colspan="6" style="text-align: left; padding: 5px"><b>Inicio: </b>{{$atestadomedico->datainicio}}</td>
        <td colspan="6" style="text-align: left; padding: 5px"><b>Final:</b> {{$atestadomedico->datafinal}}</td>

        <td style="border-right: solid; border-left: solid"></td>

        <td colspan="6" style="text-align: left; padding: 5px"><b>Inicio:</b> {{$atestadomedico->datainicio}}</td>
        <td colspan="6" style="text-align: left; padding: 5px"><b>Final:</b> {{$atestadomedico->datafinal}}</td>
    </tr>

</table>
