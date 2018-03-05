<?php namespace App\Http\Controllers;

use App\Funcionario;
use Carbon\Carbon;

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

        /*       foreach ($aniversariantes as $ob) {
                   echo $ob->nome;
               }


               die();*/
        return view('home', compact('aniversariantes'));
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
                'nome' => $func->nome,
                'idade' => $idade,
                'nascimento' => $nascimento
            ));
        }

        return json_encode($aniversariantes);
    }

}
