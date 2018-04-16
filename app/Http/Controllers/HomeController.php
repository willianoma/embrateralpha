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

        $uncisalChart = Charts::create('donut', 'morris')
            ->setTitle('Uncisal')
            ->setlabels(['Ativos', 'Inativos'])
            ->setValues([80, 20])
            ->setResponsive(false)
            ->setHeight(160)
            ->setWidth(0);


        $hdtChart = Charts::create('donut', 'morris')
            ->setTitle('HDT')
            ->setlabels(['Ativos', 'Inativos'])
            ->setValues([80, 20])
            ->setResponsive(false)
            ->setHeight(160)
            ->setWidth(0);

        return view('home', compact('aniversariantes', 'afastados', 'uncisalChart', 'hdtChart'));
    }

    public function getAniversariantes()
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

}
