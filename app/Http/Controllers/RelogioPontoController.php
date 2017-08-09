<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Funcionario;
use App\Posto;
use DB;

use Illuminate\Http\Request;

class RelogioPontoController extends Controller
{


    public function getIndex()
    {
        $postos = Posto::all();
        return view('relogio.index', compact('postos'));

    }

    public function getExportar()
    {
        $posto = $_GET['postoselecionado'];

        if ($posto == 'Todos') {
            $funcionarios = Funcionario::all();

        } else {

            $funcionarios = DB::table('funcionarios')->where('posto', $posto)->get();

            foreach ($funcionarios as $funcionario) {
                if (empty($codigo = $funcionario->id)) {
                    echo 'Codigo Não Preenchido';
                }
                $nomeFuncionario = $funcionario->nome;
                $pis = $funcionario->pis_pasep;
                $cargo = $funcionario->cargo;
                if (empty($admissao = $funcionario->data_admissao)) {
                    echo 'Data Não preenchida'. $nomeFuncionario;
                    die();
                }
                $tipo = $funcionario->tipo;


                echo $nomeFuncionario;
                echo " | ";
                echo $pis;
                echo " | ";
                echo $admissao;
                echo "<br>";
            }
            die();

        }
        return view('relogio.exportartodos', compact('funcionarios'));
    }
}
