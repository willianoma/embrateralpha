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
        $msg = '';
        $posto = $_GET['postoselecionado'];

        if ($posto == 'Todos') {
            $funcionarios = Funcionario::all();

        } else {

            $funcionarios = DB::table('funcionarios')->where('posto', $posto)->get();

            foreach ($funcionarios as $funcionario) {
                if (empty($nomeFuncionario = $funcionario->nome)) {
                    $msg = 'Nome de Funcionário Não preenchida.';

                }

                if (empty($codigo = $funcionario->id)) {
                    $msg = 'Codigo de' . $nomeFuncionario . ' Não preenchida.';
                }

                if (empty($pis = $funcionario->pis_pasep)) {
                    $msg = 'Pis/Passep de ' . $nomeFuncionario . ' Não preenchida.';

                }

                if (empty($cargo = $funcionario->cargo)) {
                    $msg = 'Cargo de ' . $nomeFuncionario . ' Não preenchida.';
                }

                if (empty($admissao = $funcionario->data_admissao)) {
                    $msg = 'Data de ' . $nomeFuncionario . ' Não preenchida.';
                }

                if (empty($tipo = $funcionario->tipo)) {
                    $msg = 'Carga Horária de ' . $nomeFuncionario . ' Não preenchida.';
                }

            }


        }
        return view('relogio.exportartodos', compact('funcionarios'), compact('msg'));
    }
}
