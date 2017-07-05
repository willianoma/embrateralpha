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
        }
        return view('relogio.exportartodos', compact('funcionarios'));
    }
}
