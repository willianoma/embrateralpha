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
        $msgs = array();
        $posto = $_GET['postoselecionado'];

        if ($posto == 'Todos') {
            $funcionarios = Funcionario::all();

            foreach ($funcionarios as $funcionario) {
                if (empty($nomeFuncionario = $funcionario->nome)) {
                    $msg = 'Nome de Funcionário Não preenchida.';
                    array_push($msgs, $msg);
                }

                if (empty($codigo = $funcionario->id)) {
                    $msg = 'Codigo de  <b>' . $nomeFuncionario . '</b> Não preenchida.';
                    $msg .= "<a href='/funcionarios/$funcionario->id/edit'>Clique Aqui Para Editar </a>";
                    array_push($msgs, $msg);

                }

                if (empty($pis = $funcionario->pis_pasep)) {
                    $msg = 'Pis/Passep de  <b>' . $nomeFuncionario . '</b> Não preenchida.';
                    $msg .= "<a href='/funcionarios/$funcionario->id/edit'>Clique Aqui Para Editar </a>";
                    array_push($msgs, $msg);

                }

                if (empty($cargo = $funcionario->cargo)) {
                    $msg = 'Cargo de  <b>' . $nomeFuncionario . '</b> Não preenchida.';
                    $msg .= "<a href='/funcionarios/$funcionario->id/edit'>Clique Aqui Para Editar </a>";
                    array_push($msgs, $msg);

                }

                if (empty($admissao = $funcionario->data_admissao)) {
                    $msg = 'Data de admissao de <b>' . $nomeFuncionario . '</b> Não preenchida.';
                    $msg .= "<a href='/funcionarios/$funcionario->id/edit'>Clique Aqui Para Editar </a>";
                    array_push($msgs, $msg);

                }

                if (empty($tipo = $funcionario->tipo)) {
                    $msg = 'Carga Horária  de  <b>' . $nomeFuncionario . '</b> Não preenchida.';
                    $msg .= "<a href='/funcionarios/$funcionario->id/edit'>Clique Aqui Para Editar </a>";
                    array_push($msgs, $msg);

                }

            }

        } else {

            $funcionarios = DB::table('funcionarios')->where('posto', $posto)->get();

            foreach ($funcionarios as $funcionario) {
                if (empty($nomeFuncionario = $funcionario->nome)) {
                    $msg = 'Nome de Funcionário Não preenchida.';
                    array_push($msgs, $msg);

                }

                if (empty($codigo = $funcionario->id)) {
                    $msg = 'Codigo de  <b>' . $nomeFuncionario . '</b> Não preenchida.';
                    $msg .= "<a href='/funcionarios/$funcionario->id/edit'>Clique Aqui Para Editar </a>";
                    array_push($msgs, $msg);

                }

                if (empty($pis = $funcionario->pis_pasep)) {
                    $msg = 'Pis/Passep de  <b>' . $nomeFuncionario . '</b> Não preenchida.';
                    $msg .= "<a href='/funcionarios/$funcionario->id/edit'>Clique Aqui Para Editar </a>";
                    array_push($msgs, $msg);

                }

                if (empty($cargo = $funcionario->cargo)) {
                    $msg = 'Cargo de  <b>' . $nomeFuncionario . '</b> Não preenchida.';
                    $msg .= "<a href='/funcionarios/$funcionario->id/edit'>Clique Aqui Para Editar </a>";
                    array_push($msgs, $msg);

                }

                if (empty($admissao = $funcionario->data_admissao)) {
                    $msg = 'Data de admissao de <b>' . $nomeFuncionario . '</b> Não preenchida.';
                    $msg .= "<a href='/funcionarios/$funcionario->id/edit'>Clique Aqui Para Editar </a>";
                    array_push($msgs, $msg);

                }

                if (empty($tipo = $funcionario->tipo)) {
                    $msg = 'Carga Horária  de  <b>' . $nomeFuncionario . '</b> Não preenchida.';
                    $msg .= "<a href='/funcionarios/$funcionario->id/edit'>Clique Aqui Para Editar </a>";
                    array_push($msgs, $msg);

                }

            }


        }
        return view('relogio.exportartodos', compact('funcionarios'), compact('msgs'));
    }
}
