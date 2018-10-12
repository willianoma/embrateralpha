<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class VisitaPendenciasController extends Controller
{

    public function getIndex()
    {
        $pendenciasVisitasGeral = $this->getPendenciasgeral();
        $pendenciasVisitasIndividual = $this->getPendenciasindividual();
        $pendenciasconcluidas = $this->getPendenciasConcluidas();

        return view('dashboard/pendencias/index', compact('pendenciasVisitasGeral', 'pendenciasVisitasIndividual', 'pendenciasconcluidas'));

    }

    public function getResolver($id)
    {
        $pendencia = Pendencias::find($id);
        $todaspendencias = Pendencias::where('idvisita', '=', $pendencia->idvisita)->get();

        if ($pendencia->status == 'concluido') {

            return redirect('/pendencias/')->with('message', 'Pendencia concluida');
        }


        if ($pendencia->tipovisita == 'geral') {

            $visita = VisitaGeral::find($pendencia->idvisita);

            //dd($visita->getEmpresa);
        }
        if ($pendencia->tipovisita == 'individual') {

            $visita = VisitaIndividual::find($pendencia->idvisita);
        }

        return view('dashboard/pendencias/resolver', compact('pendencia', 'visita', 'todaspendencias'));

    }

    public function postStore(Request $request)
    {
        $idvisita = $request->input('idvisita');
        $tipovisita = $request->input('tipovisita');
        $pendenciaatual = Pendencias::find($request->input('idpendencia'));

        if ($tipovisita == 'geral') {
            if ($request->input('status') == 'concluido') {
                $pendenciaatual->status = 'concluido';
                $pendenciaatual->save();
                $pendenciaatual = new Pendencias();
                $pendenciaatual->idvisita = $request->input('idvisita');
                $pendenciaatual->idusuario = Auth::user()->id;
                $pendenciaatual->tipovisita = $request->input('tipovisita');
                $pendenciaatual->novadescricao = $request->input('novadescricao');
                $pendenciaatual->status = 'concluido';
                $pendenciaatual->save();

                //dar um new
                /* $pendenciaatual->novadescricao = $request->input('pendenciaold');
                 $pendenciaatual->status = 'concluido';
                 $pendenciaatual->save();*/

                //Ver possicibilidade de VISITA.PENDENCIAS SER BOOLEAN
                $visitaGeral = VisitaGeral::find($idvisita);
                $visitaGeral->pendencias = "";
                $visitaGeral->save();
            }

            if ($request->input('status') != 'concluido') {
                $pendenciaatual->status = 'concluido';
                $pendenciaatual->save();

                $pendencia = new Pendencias();
                $pendencia->idvisita = $request->input('idvisita');
                $pendencia->idusuario = Auth::user()->id;
                $pendencia->tipovisita = $request->input('tipovisita');
                $pendencia->novadescricao = $request->input('novadescricao');
                $pendencia->status = $request->input('status');
                $pendencia->save();
            }

            $visita = VisitaGeral::find($idvisita);
            $visita->status = $request->input('status');
            $visita->save();

        }

        if ($tipovisita == 'individual') {
            if ($request->input('status') == 'operacional') {
                $pendenciaatual->novadescricao = $request->input('novadescricao');
                $pendenciaatual->status = 'operacional';
                $pendenciaatual->save();

                $visitaIndividual = VisitaIndividual::find($idvisita);
                $visitaIndividual->pendencias = "";
                $visitaIndividual->save();
            }
            if ($request->input('status') != 'operacional') {
                $pendenciaatual->status = 'operacional';
                $pendenciaatual->save();

                $pendencia = new Pendencias();
                $pendencia->idvisita = $request->input('idvisita');
                $pendencia->idusuario = Auth::user()->id;
                $pendencia->tipovisita = $request->input('tipovisita');
                $pendencia->novadescricao = $request->input('novadescricao');
                $pendencia->status = $request->input('status');
                $pendencia->save();
            }
            $visita = VisitaIndividual::find($idvisita);
            $visita->status = $request->input('status');
            $visita->save();
        }

        return redirect('pendencias/index')->with('message', 'Pendencia resolvida com sucesso.');


    }

    public
    function getPendenciasConcluidas()
    {
        $pendenciasconcluidas = Pendencias::where('status', 'concluido')->orwhere('status', 'operacional')->orderBy('updated_at', 'desc')->paginate(10);

        return $pendenciasconcluidas;
    }

    public
    function getPendenciasgeral()
    {
        if (auth()->user()->permissao == "cliente") {
            //Não funciona por hora
            $pendenciasVisitasGeral = Pendencias::join('visita_gerals', 'pendencias.idvisita', '=', 'visita_gerals.id')->where('idempresa', auth()->user()->idempresa)->get();


            //$pendenciasVisitasGeral = Pendencias::with('getVisitaGeral')->where('idempresa', auth()->user()->idempresa)->get();
            //Refatorar para isso ai.
            //dd(VisitaGeral::join('pendencias', 'visita_gerals.id', '=' , 'pendencias.idvisita')->where('idempresa',auth()->user()->idempresa)->get());

            /*  $TodasPendenciasVisitasGeral = Pendencias::all();
              $pendenciasVisitasGeral = array();

              foreach ($TodasPendenciasVisitasGeral as $pvg) {
                  if (auth()->user()->idempresa == $pvg->getvisitaGeral->getEmpresa->id) {
                      array_push($pendenciasVisitasGeral, $pvg);
                  }
              }*/
        }

        if (auth()->user()->permissao == "user") {
            $pendenciasVisitasGeral = Pendencias::where('tipovisita', 'geral')->where('status', 'pendente')->orderBy('updated_at', 'desc')->get();
        }

        if (auth()->user()->permissao == "admin") {
            $pendenciasVisitasGeral = Pendencias::where('tipovisita', 'geral')->where('status', 'pendente')->orderBy('updated_at', 'desc')->get();


        }
        return $pendenciasVisitasGeral;
    }

    public
    function getPendenciasindividual()
    {
        if (auth()->user()->permissao == "cliente") {
            //Não funciona por hora
            $pendenciasVisitasIndividual = Pendencias::join('visita_individuals', 'pendencias.idvisita', '=', 'visita_individuals.id')->where('idempresa', auth()->user()->idempresa)->get();

            //dd(VisitaGeral::join('pendencias', 'visita_gerals.id', '=' , 'pendencias.idvisita')->where('idempresa',auth()->user()->idempresa)->get());

            //$pendenciasVisitasIndividual = VisitaGeral::join('pendencias', 'visita_gerals.id', '=', 'pendencias.idvisita')->where('idempresa', auth()->user()->idempresa)->get();

            // dd($pendenciasVisitasIndividual);
            /*   $todasPendenciasVisitasIndividual = Pendencias::all();
               $pendenciasVisitasIndividual = array();
               dump($todasPendenciasVisitasIndividual);

               foreach ($todasPendenciasVisitasIndividual as $pvg) {

                   if (auth()->user()->idempresa == $pvg->getvisitaIndividual->getEmpresa->id) {
                       array_push($pendenciasVisitasIndividual, $pvg);
                       dump($pendenciasVisitasIndividual);

                   }
               }*/
        }

        if (auth()->user()->permissao == "user") {
            $pendenciasVisitasIndividual = Pendencias::where('idusuario', auth()->id())->where('tipovisita', 'individual')->where('status', '!=', 'operacional')->orderBy('updated_at', 'desc')->get();
            // dd($pendenciasVisitasIndividual);

        }

        if (auth()->user()->permissao == "admin") {
            $pendenciasVisitasIndividual = Pendencias::where('tipovisita', 'individual')->where('status', 'pendente')->orderBy('updated_at', 'desc')->get();

        }

        //dd($pendenciasVisitasIndividual);
        return $pendenciasVisitasIndividual;
    }

}
