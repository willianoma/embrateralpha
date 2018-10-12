<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\VisitasPendencias;
use App\Visita;
use Auth;
use Illuminate\Http\Request;

class VisitaPendenciasController extends Controller
{

    public function getIndex()
    {
        $pendenciasVisitas = $this->getPendencias();
        $pendenciasconcluidas = $this->getPendenciasConcluidas();

        return view('/visita/pendencias/index', compact('pendenciasVisitas', 'pendenciasconcluidas'));

    }

    public function getResolver($id)
    {
        $pendencia = VisitasPendencias::find($id);
        $todaspendencias = VisitasPendencias::where('idvisita', '=', $pendencia->idvisita)->get();

        if ($pendencia->status == 'concluido') {

            return redirect('/visita/pendencias/')->with('message', 'Pendencia concluida');
        }


        $visita = Visita::find($pendencia->idvisita);


        return view('visita/pendencias/resolver', compact('pendencia', 'visita', 'todaspendencias'));

    }

    public function postStore(Request $request)
    {
        $idvisita = $request->input('idvisita');
        $tipovisita = $request->input('tipovisita');
        $pendenciaatual = VisitasPendencias::find($request->input('idpendencia'));


        if ($request->input('status') == 'concluido') {
            $pendenciaatual->status = 'concluido';
            $pendenciaatual->save();
            $pendenciaatual = new VisitasPendencias();
            $pendenciaatual->idvisita = $request->input('idvisita');
            $pendenciaatual->idusuario = Auth::user()->id;
            $pendenciaatual->novadescricao = $request->input('novadescricao');
            $pendenciaatual->status = 'concluido';
            $pendenciaatual->save();

            //dar um new
            /* $pendenciaatual->novadescricao = $request->input('pendenciaold');
             $pendenciaatual->status = 'concluido';
             $pendenciaatual->save();*/

            //Ver possicibilidade de VISITA.PENDENCIAS SER BOOLEAN
            $visita = Visita::find($idvisita);
            $visita->pendencias = "";
            $visita->save();
        }

        if ($request->input('status') != 'concluido') {
            $pendenciaatual->status = 'concluido';
            $pendenciaatual->save();

            $pendencia = new VisitasPendencias();
            $pendencia->idvisita = $request->input('idvisita');
            $pendencia->idusuario = Auth::user()->id;
            $pendencia->novadescricao = $request->input('novadescricao');
            $pendencia->status = $request->input('status');
            $pendencia->save();
        }

        $visita = Visita::find($idvisita);
        $visita->status = $request->input('status');
        $visita->save();


        return redirect('/pendencias/index')->with('message', 'Pendencia resolvida com sucesso.');


    }

    public
    function getPendenciasConcluidas()
    {
        $pendenciasconcluidas = VisitasPendencias::where('status', 'concluido')->orwhere('status', 'operacional')->orderBy('updated_at', 'desc')->paginate(10);

        return $pendenciasconcluidas;
    }

    public
    function getPendencias()
    {

        $pendenciasVisitas = VisitasPendencias::where('status', 'pendente')->orderBy('updated_at', 'desc')->get();


        return $pendenciasVisitas;
    }


}
