<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Visita;
use App\VisitasPendencias;
use App\User;
use App\Posto;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Carbon\Carbon;
use Mail;
use Illuminate\Http\Request;
use App\Http\Requests\VisitaRequest;


class VisitaController extends Controller
{

    public function getIndex()
    {


//        $visitas = Visita::orderBy('updated_at', 'desc')->paginate(10);

        $visitas = Visita::orderBy('updated_at', 'desc')->paginate(10);;

        return view('/visita/index', compact('visitas'));
    }


    public function getCriar($idposto)
    {
        $messagem = '';

        $QtdVisitasPendencias = VisitasPendencias::where('status', '<>', 'operacional')->where('status', '<>', 'concluido')->count();

        if (!empty($QtdVisitasPendencias)) {
            $messagem = 'Existem ' . $QtdVisitasPendencias . ' Pendencia no sistema.';
        }

        if ($idposto == 'undefined') {
            $posto = posto::orderBy('nome', 'asc')->get();
            $undefined = TRUE;
        } else {
            $posto = posto::findOrFail($idposto);
            $undefined = FALSE;
        }

        Mapper::location('Maceió')->map(['zoom' => 15, 'center' => true, 'rotateControl' => false, 'ui' => false, 'mapTypeControl' => false, 'scrollWheelZoom' => false, 'streetViewControl' => false, 'marker' => true, 'zoomControl' => false, 'eventAfterLoad' => 'onMapLoad(maps[0].map);']);

        $datetime = date('Y-n-d\TH:i');

        return view('/visita/criar', compact('datetime', 'posto', 'undefined', 'messagem'));
    }


    public function getCriaravulso($idposto)
    {
        $messagem = '';

        $QtdVisitasPendencias = VisitasPendencias::where('status', '<>', 'operacional')->where('status', '<>', 'concluido')->count();

        if (!empty($QtdVisitasPendencias)) {
            $messagem = 'Existem ' . $QtdVisitasPendencias . ' Pendencia no sistema.';
        }
        if ($idposto == 'undefined') {
            $posto = posto::orderBy('razaosocial', 'asc')->where('contratante', '=', 0)->get();
            $undefined = TRUE;
        } else {
            $posto = posto::findOrFail($idposto);
            $undefined = FALSE;
        }

        $datetime = date('Y-n-d\TH:i');


        Mapper::location('Maceió')->map(['eventAfterLoad' => 'onMapLoad(maps[0].map);']);


        return view('/dashboard/cadastros/visita/criaravulso', compact('datetime', 'undefined', 'posto', 'messagem'));
    }


    public function getVer($id)
    {
        $visita = visita::findOrFail($id);
        try {
            $usuario = User::FindOrFail($visita->idusuario);
        } catch (ModelNotFoundException $ex) {
            $usuario = new User();
            $usuario->name = 'removido';
        };

        $duracao = $this->duracaoEmHoras($visita->horainicio, $visita->horasaida);


        $posto = posto::FindOrFail($visita->idposto);
        $latlong = explode(',', $visita->geolocalizacao);

        $pendencias = VisitasPendencias::where('idvisita', $visita->id)->get();

        foreach ($pendencias as $pend) {
            $lastPendencia = $pend;
        }


//
        Mapper::map($latlong[0], $latlong[1], ['zoom' => 15, 'center' => true, 'rotateControl' => false, 'mapTypeControl' => false, 'scrollWheelZoom' => false, 'streetViewControl' => false, 'marker' => true, 'zoomControl' => false]);


        return view('/visita/ver', compact('visita', 'usuario', 'posto', 'pendencias', 'duracao', 'lastPendencia'));
    }


    public function duracaoEmHoras($dateA, $dateB)
    {

        $duracao = Carbon::parse($dateA)->diffInMinutes(Carbon::parse($dateB));

        return $duracao;
    }

    public function getEditar($id)
    {
        return view('/dashboard/cadastros/visita/editar');
    }

    public function postStore(VisitaRequest $request)
    {
        $visita = new visita();
        $visita->idusuario = $request->input('idusuario');
        $visita->idposto = $request->input('idposto');
        $visita->horainicio = $request->input('horainicio');
        $visita->horasaida = $request->input('horasaida');
        $visita->descricao = $request->input('descricao');
        $visita->pendencias = "";
        $visita->geolocalizacao = $request->input('geolocalizacao');
        $visita->status = $request->input('status');

        $visita->assinatura = 'Ausente';


        $visita->save();


        if ($visita->status == 'pendente') {

            $pendencia = new VisitasPendencias();

            $pendencia->idvisita = $visita->id;
            $pendencia->idusuario = $visita->idusuario;
            $pendencia->novadescricao = $request->input('pendencias');
            $pendencia->status = 'pendente';

            $pendencia->save();
        }


        if ($request->input('sendemail')) {
            $this->getSendemailvisita($visita->id);
        }
        return redirect('/visita')->with('message', 'Visita cadastrada com sucesso!');
    }


    public function getSendemailvisita($id)
    {
        $visita = visita::findOrFail($id);
        try {
            $usuario = User::FindOrFail($visita->idusuario);
        } catch (ModelNotFoundException $ex) {
            $usuario = new User();
            $usuario->name = 'removido';
        };

        $duracao = $this->duracaoEmHoras($visita->horainicio, $visita->horasaida);


        $posto = posto::FindOrFail($visita->idposto);
        $latlong = explode(',', $visita->geolocalizacao);

        $VisitasPendencias = VisitasPendencias::where('idvisita', $visita->id)->where('tipovisita', 'geral')->get();

        Mapper::map($latlong[0], $latlong[1], ['zoom' => 15, 'center' => true, 'rotateControl' => false, 'mapTypeControl' => false, 'scrollWheelZoom' => false, 'streetViewControl' => false, 'marker' => true, 'zoomControl' => false]);


        $data = [
            'visita' => $visita,
            'posto' => $posto,
            'usuario' => $usuario,
            'VisitasPendencias' => $VisitasPendencias,
            'duracao' => $duracao,
        ];


        Mail::send('/dashboard/cadastros/visita/sendemail', $data, function ($message) use ($posto) {

            $message->to($posto->email, $posto->razaosocial)->subject('Visita Técnica Mega Empreendimentos');
        });

        return redirect('visita/ver/' . $visita->id)->with('message', 'Email Enviado para: ' . $posto->email);

    }


    public function update($id)
    {
        //
    }


    public function getDeletar($id)
    {
        $visita = visita::findOrFail($id);
        $pendencia = VisitasPendencias::where('idvisita', '=', $id)->delete();
        $visita->delete();
        return redirect('visita/index');
    }


}
