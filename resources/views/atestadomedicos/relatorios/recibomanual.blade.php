@for($i = 0; $i <= 29; $i++)

    <table border='0' style='width: 960px; border: solid'>

        <tr id='grid'>
            <th width='29'> </th>
            <th width='29'> </th>
            <th width='29'> </th>
            <th width='29'> </th>
            <th width='29'> </th>
            <th width='29'> </th>
            <th width='29'> </th>
            <th width='29'> </th>
            <th width='29'> </th>
            <th width='29'> </th>
            <th width='29'> </th>
            <th width='29'> </th>


            <th width='5'></th>

            <th width='29'> </th>
            <th width='29'> </th>
            <th width='29'> </th>
            <th width='29'> </th>
            <th width='29'> </th>
            <th width='29'> </th>
            <th width='29'> </th>
            <th width='29'> </th>
            <th width='29'> </th>
            <th width='29'> </th>
            <th width='29'> </th>
            <th width='29'> </th>
        </tr>

        <tr id='Row1'>
            <td colspan='8'><img height='30px' width='40px' src='logo.png' style='padding-left: 10px'></td>
            <th colspan='4'
                style='text-align: center; padding: 1px; border-bottom: solid; border-left:solid;'>
                Referencia: {{$newRecords[$i]}}

            </th>

            <td style='border-right: solid; border-left: solid'></td>

            <td colspan='8'><img height='30px' width='40px' src='logo.png' style='padding-left: 10px'></td>
            <th colspan='4'
                style='text-align: center; padding: 1px; border-bottom: solid; border-left:solid '>
                Referencia: {{$newRecords[$i]}}

            </th>
        </tr>


        <tr id='Row2'>
            <td colspan='12' style='text-align: left; padding: 5px; border-bottom: solid'>
                <b>Funcionário:</b></td>

            <td style='border-right: solid; border-left: solid'></td>

            <td colspan='12' style='text-align: left; padding: 5px; border-bottom: solid'>
                <b>Funcionário:</b></td>
        </tr>


        <tr id='Row3'>
            <td colspan='12' style='; text-align: left; padding: 5px;border-bottom: solid;  '>
                <b>Posto:</b></td>

            <td style='border-right: solid; border-left: solid'></td>

            <td colspan='12' style='; text-align: left; padding: 5px;border-bottom: solid;  '>
                <b>Posto:</b></td>
        </tr>


        <tr id='Row4'>
            <td colspan='12' style='text-align: left; padding: 4px; border-bottom: solid'><b>Obs.:</b></td>

            <td style='border-right: solid; border-left: solid'></td>

            <td colspan='12' style='text-align: left; padding: 4px; border-bottom: solid'><b>Obs.:</b></td>
        </tr>


        <tr id='Row5'>
            <td colspan='6' style='text-align: left; padding: 3px; border-bottom: solid'><b>Inicio: </b></td>
            <td colspan='6' style='text-align: left; padding: 3px; border-bottom: solid'><b>Final:</b></td>

            <td style='border-right: solid; border-left: solid'></td>

            <td colspan='6' style='text-align: left; padding: 3px; border-bottom: solid'><b>Inicio:</b></td>
            <td colspan='6' style='text-align: left; padding: 3px; border-bottom: solid'><b>Final:</b></td>
        </tr>

        <tr id='Row6'>
            <td colspan='12' style='text-align: left; padding: 3px;border-bottom: solid '><b>Funcionário: </b></td>

            <td style='border-right: solid; border-left: solid'></td>

            <td colspan='12' style='text-align: left; padding: 3px; border-bottom: solid'><b>Funcionário: </b></td>

        </tr>

        <tr id='Row7'>
            <td colspan='12' style='text-align: left; padding: 3px; '><b>Embrater: </b></td>

            <td style='border-right: solid; border-left: solid'></td>

            <td colspan='12' style='text-align: left; padding: 3px'><b>Embrater: </b></td>

        </tr>

    </table>

@endfor