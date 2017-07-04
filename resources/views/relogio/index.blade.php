<meta charset="utf-8">
<?php

$codigo = '';
$nomeFuncionario = '';
$cargo = '';
$dep = '';
$cnpj = '';
$admissao = '';
$pis = '';
$cracha = '';
$semanaEntradaExpediente = '';
$semanaSaidaIntervalo = '';
$semanaRetornoIntervalo = '';
$semanaSaidaExpediente = '';
$sabadoEntradaExpediente = '';
$sabadoSaidaIntervalo = '';
$sabadoRetornoIntervalo = '';
$sabadoSaidaExpediente = '';
$domingoEntradaExpediente = '';
$domingoSaidaIntervalo = '';
$domingoRetornoIntervalo = '';
$domingoSaidaExpediente = '';

// Definimos o nome do arquivo que será exportado
$arquivo = 'planilha.xls';
// Criamos uma tabela HTML com o formato da planilha
$html = '';
$html .= '<table>';
$html .= '<tr>';
$html .= '<td rowspan="2">CÓDIGO/REGISTRO</td>';
$html .= '<td rowspan="2">NOME FUNCIONÁRIO (Preenchimento Obrigatório)</td>';
$html .= '<td rowspan="2">CARGO (Preenchimento Obrigatório)</td>';
$html .= '<td rowspan="2">DEPTO</td>';
$html .= '<td rowspan="2">CNPJ</td>';
$html .= '<td rowspan="2">ADMISSÃO (Preenchimento Obrigatório)</td>';
$html .= '<td rowspan="2">PIS (Preenchimento Obrigatório)</td>';
$html .= '<td rowspan="2">CRACHÁ</td>';

$html .= '<td rowspan="1" colspan="4">EXPEDIENTE SEMANAL (Preenchimento Obrigatório)</td>';

$html .= '<td rowspan="1" colspan="4">EXPEDIENTE SABADO</td>';

$html .= '<td rowspan="1" colspan="4">EXPEDIENTE DOMINGO</td>';

$html .= '</tr>';

$html .= '<tr>';
$html .= '<td><b>ENTRADA MANHA</b></td>';
$html .= '<td><b>SAIDA INTERVALO</b></td>';
$html .= '<td><b>RETORNO INTERVALO</b></td>';
$html .= '<td><b>SAIDA EXPEDIENTE</b></td>';

$html .= '<td><b>ENTRADA MANHA</b></td>';
$html .= '<td><b>SAIDA INTERVALO</b></td>';
$html .= '<td><b>RETORNO INTERVALO</b></td>';
$html .= '<td><b>SAIDA EXPEDIENTE</b></td>';

$html .= '<td><b>ENTRADA MANHA</b></td>';
$html .= '<td><b>SAIDA INTERVALO</b></td>';
$html .= '<td><b>RETORNO INTERVALO</b></td>';
$html .= '<td><b>SAIDA EXPEDIENTE</b></td>';
$html .= '</tr>';

//prencher
$html .= '<tr>';
$html .= "<td>$codigo</td>";
$html .= "<td>$nomeFuncionario</td>";
$html .= "<td>$cargo</td>";
$html .= "<td>$dep</td>";
$html .= "<td>$cnpj</td>";
$html .= "<td>$admissao</td>";
$html .= "<td>$pis</td>";
$html .= "<td>$cracha</td>";
$html .= "<td>$semanaEntradaExpediente</td>";
$html .= "<td>$semanaSaidaIntervalo</td>";
$html .= "<td>$semanaRetornoIntervalo</td>";
$html .= "<td>$semanaSaidaExpediente</td>";
$html .= "<td>$sabadoEntradaExpediente</td>";
$html .= "<td>$sabadoSaidaIntervalo</td>";
$html .= "<td>$sabadoRetornoIntervalo</td>";
$html .= "<td>$sabadoSaidaExpediente</td>";
$html .= "<td>$domingoEntradaExpediente</td>";
$html .= "<td>$domingoSaidaIntervalo</td>";
$html .= "<td>$domingoRetornoIntervalo</td>";
$html .= "<td>$domingoSaidaExpediente</td>";
$html .= '</tr>';



$html .= '</table>';
// Configurações header para forçar o download
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Content-type: application/x-msexcel");
header("Content-Disposition: attachment; filename=\"{$arquivo}\"");
header("Content-Description: PHP Generated Data");
// Envia o conteúdo do arquivo
echo $html;
exit;