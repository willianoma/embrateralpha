<?php namespace App\Http\Controllers;

use App\Funcionario;
use Carbon\Carbon;
use Khill\Lavacharts\Lavacharts;
use Charts;

class HomeController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */


    public function index()
    {
        $aniversariantes = json_decode($this->getAniversariantes());
        $afastados = json_decode($this->getAfastados());

        $uncisalChart = $this->createChart('Uncisal', '#00BFFF', 60, 50);
        $hdtChart = $this->createChart('Hdt', '#008B8B', 50, 50);
        $santaMonicaChart = $this->createChart('San. Mônica', '#40E0D0', 50, 80);
        $portugalRamalhoChart = $this->createChart('Por. Ramalho', '#FA8072', 40, 50);
        $etsalChart = $this->createChart('ETSAL', '#DAA520', 30, 50);
        $reservaChart = $this->createChart('Reserva Tec.', '#808080', 8, 10);

        $geralChart = Charts::create('pie', 'chartjs')
            ->setColors(['#00BFFF', '#008B8B', '#40E0D0', '#FA8072', '#DAA520'])
            ->setTitle('Alocação Por Unidades')
            ->setlabels(['UNCISAL', 'HDT', 'SAN. MONICA', 'POR. RAMALHO', 'ETSAL'])
            ->setValues([60, 10, 10, 10, 10])
            ->setResponsive(false)
            ->setHeight(400)
            ->setWidth(0);


        return view('home', compact('aniversariantes', 'afastados', 'uncisalChart', 'hdtChart', 'santaMonicaChart', 'portugalRamalhoChart', 'etsalChart', 'reservaChart', 'geralChart'));
    }

    public
    function getAniversariantes()
    {

        $aniversariantes = array();
        $mesAtual = date('m');
        $funcionarios = Funcionario::whereMonth('nascimento', '=', $mesAtual)->orderBy('nome', 'asc')->get();


        foreach ($funcionarios as $func) {
            $idade = Carbon::parse($func['nascimento'])->age;
            $nascimento = date('d/m/Y', strtotime($func->nascimento));
            array_push($aniversariantes, array(
                'id' => $func->id,
                'nome' => $func->nome,
                'idade' => $idade,
                'nascimento' => $nascimento
            ));
        }

        return json_encode($aniversariantes);
    }

    public
    function getAfastados()
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
}
