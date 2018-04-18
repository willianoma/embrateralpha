<?php namespace App\Http\Controllers;

use App\Funcionario;
use Carbon\Carbon;
use Charts;
use DB;

class HomeController extends Controller
{

    /* 04/2018
   portugal = 48
   santa monica = 52
   hdt = 46
   unsical = 4+4+1+1+18+9  = 37
   etsal = 8
   total 189
   */

    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function index()
    {
        $qtdAniversariantes = json_decode($this->getQtdAniversariantes());

        $sumario = $this->getSumario();
        $afastados = json_decode($this->getAfastados());

        $uncisalChart = $this->createChart('Uncisal', '#4db6ac', $this->getQtdFuncionariosAtivos('uncisal'), $this->getQtdFuncionarios('uncisal'));
        $hdtChart = $this->createChart('H.E.H.A', '#4db6ac', $this->getQtdFuncionariosAtivos('Hospital Escola Dr. Helvio Auto'), $this->getQtdFuncionarios('Hospital Escola Dr. Helvio Auto'));
        $santaMonicaChart = $this->createChart('San. Mônica', '#4db6ac', $this->getQtdFuncionariosAtivos('Santa Monica'), $this->getQtdFuncionarios('Santa Monica'));
        $portugalRamalhoChart = $this->createChart('H.E.P.R', '#4db6ac', $this->getQtdFuncionariosAtivos('Portugal Ramalho'), $this->getQtdFuncionarios('Portugal Ramalho'));
        $etsalChart = $this->createChart('ETSAL', '#4db6ac', $this->getQtdFuncionariosAtivos('Etsal'), $this->getQtdFuncionarios('Etsal'));
        $reservaChart = $this->createChart('Reserva Tec.', '#4db6ac', $this->getQtdFuncionariosAtivos('Reserva'), $this->getQtdFuncionarios('Reserva'));

        $geralChart = Charts::create('pie', 'chartjs')
            ->setColors(['#00BFFF', '#008B8B', '#40E0D0', '#FA8072', '#DAA520'])
            ->setTitle('Alocação Por Unidades')
            ->setlabels(['UNCISAL', 'H.E.H.A', 'SAN. MONICA', 'H.E.P.R', 'ETSAL', 'AUSENTES'])
            ->setValues([$this->getQtdFuncionariosAtivos('uncisal'), $this->getQtdFuncionariosAtivos('Hospital Escola Dr. Helvio Auto'), $this->getQtdFuncionariosAtivos('Santa Monica'), $this->getQtdFuncionariosAtivos('Portugal Ramalho'), $this->getQtdFuncionariosAtivos('Reserva'), $this->getFuncionariosAusentes()])
            ->setResponsive(false)
            ->setHeight(400)
            ->setWidth(0);


        return view('home', compact('afastados', 'qtdAniversariantes', 'uncisalChart', 'hdtChart', 'santaMonicaChart', 'portugalRamalhoChart', 'etsalChart', 'reservaChart', 'geralChart', 'sumario'));
    }

    public function getQtdAniversariantes()
    {
        $mesAtual = date('m');
        $qtdaniversariantes = Funcionario::whereMonth('nascimento', '=', $mesAtual)->count();

        return $qtdaniversariantes;
    }

    public function getAfastados()
    {
        $afastados = array();
        $funcionariosinss = Funcionario::where('status', '=', 'INSS')->orderBy('nome', 'asc')->get();
        $funcionariosferias = Funcionario::where('status', '=', 'Férias')->orderBy('nome', 'asc')->get();

        foreach ($funcionariosinss as $func) {

            array_push($afastados, array(
                'id' => $func->id,
                'nome' => $func->nome,
                'status' => $func->status,
            ));
        }

        foreach ($funcionariosferias as $func) {

            array_push($afastados, array(
                'id' => $func->id,
                'nome' => $func->nome,
                'status' => $func->status,
            ));
        }

        return json_encode($afastados);

    }


    public function isPositivo($numero)
    {
        if ($numero < 0) {
            return false;
        } else return true;
    }

    public function createChart($titulo, $corUnidade, $qtdFuncAtivos, $qtdFuncContrato)
    {
        $diferenca = $qtdFuncContrato - $qtdFuncAtivos;

        if ($this->isPositivo($diferenca)) {
            $label = 'Vago';
            $cor = '#32CD32';
            $diferenca;
        } else {
            $label = 'Sobressalente';
            $cor = '#B22222';
            $diferenca = abs($diferenca);
        }


        $chart = Charts::create('donut', 'morris')
            ->setColors([$corUnidade, $cor])
            ->setTitle($titulo)
            ->setlabels(['Ativos', $label])
            ->setValues([$qtdFuncAtivos, $diferenca])
            ->setResponsive(false)
            ->setHeight(160)
            ->setWidth(0);
        return $chart;
    }

    public function getQtdFuncionarios($posto)
    {
        $results = DB::select("select qtdfunc from postos where nome = '$posto' ");
        return $results[0]->qtdfunc;
    }

    public function getQtdFuncionariosAtivos($posto)
    {
        $qtdFuncPosto = Funcionario::where('posto', '=', $posto)->where('status', '=', 'Ativo')->count();
        return $qtdFuncPosto;
    }

    public function getFuncionariosAusentes()
    {
        $ausentes = Funcionario::where('Status', '<>', 'Ativo')->where('Status', '<>', 'Inativo')->count();
        return $ausentes;
    }

    public function getSumario()
    {
        $Cadastrados = Funcionario::all()->count();
        $Ativos = Funcionario::where('Status', '=', 'Ativo')->count();
        $Inativos = Funcionario::where('Status', '=', 'Inativo')->count();
        $Ferias = Funcionario::where('Status', 'like', '%rias')->count();
        $INSS = Funcionario::where('Status', '=', 'INSS')->count();
        $Maternidade = Funcionario::where('Status', '=', 'Maternidade')->count();


        $sumario = array(
            'Cadastrados' => $Cadastrados,
            'Ativos' => $Ativos,
            'Inativos' => $Inativos,
            'Ferias' => $Ferias,
            'Inss' => $INSS,
            'Maternidade' => $Maternidade
        );

        return $sumario;

    }

}
