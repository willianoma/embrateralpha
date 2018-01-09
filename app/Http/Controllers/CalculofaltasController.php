<?php namespace App\Http\Controllers;

use App\CalculoFaltas;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Funcionario;

class CalculofaltasController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */


    public function index()
    {


        $calculoFaltas = $this->getDataFile();
        /* $funcionarios = Funcionario::orderBy('id', 'desc')->paginate(20);*/
        return view('calculofaltas.index', compact('calculoFaltas'));

        /* return view('calculofaltas.index')->with('funcionario',$funcionarios);*/

    }

    public function getDataFile()
    {
        $calculofaltas = new CalculoFaltas();
        $todos  = array();

        $arquivo = fopen('teste.txt', 'r');

        $matricula = '';
        $codigoEvento = '';
        $numeroFaltas = '';
        $dataInicio = '';
        $dataFinal = '';
        $nomeFuncionario = '';
        $tipoHorarioFuncionario = '';

        while (!feof($arquivo)) {

            $linha = fgets($arquivo);
            $piece = explode("|", $linha);

            $matricula = $piece[0];
            $codigoEvento = $piece[1];
            $numeroFaltas = $piece[2];
            $dataInicio = $piece[3];
            $dataFinal = $piece[4];


            //Verificar se matricula existe
            $funcionario = Funcionario::where('referencia', $matricula)->first();


            $calculofaltas->setReferencia($matricula);
            $calculofaltas->setCodigoevento($codigoEvento);
            $calculofaltas->setFaltas($numeroFaltas);
            $calculofaltas->setDataInicio($dataInicio);
            $calculofaltas->setDataFinal($dataFinal);
            $calculofaltas->setNomeFuncionario($funcionario->nome);
            $calculofaltas->setTipoHorarioFuncionario($funcionario->tipo);

            //Ver aqui, ta sobrescrevendo...
            array_push($todos,$calculofaltas);

        }

        return $todos;
        fclose($arquivo);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
