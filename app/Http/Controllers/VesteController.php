<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Veste;
use Illuminate\Http\Request;

class VesteController extends Controller
{


    public function getEntregarveste()
    {
        return view('veste/entregarVeste');
    }

    public function getDevolverveste()
    {
        return view('veste/devolverVeste');

    }

    public function getListarentregarveste()
    {
        return view('veste/listarEntregarVeste');

    }

    public function getListardevolverveste()
    {
        return view('veste/listarDevolverVeste');

    }

    //CRUD VESTE
    public function getCrudveste()
    {
        $vestes = Veste::all();
        return view('veste/crudVeste', compact('vestes'));
    }


    //Gravar Tipo Veste
    public function postStoreveste(Request $request)
    {
        $veste = new Veste();
        $veste->tipo = $request->input('tipoveste');
        $veste->save();
        return redirect('/veste/crudveste');

    }

    //Deleta Tipo Veste
    public function getDeleteveste($id)
    {
        $veste = Veste::find($id);
        $veste->delete();
        return redirect('/veste/crudveste');
    }

    //Atualiza Tipo Veste
    public function postUpdateveste()
    {
        //ajax
        return redirect('/veste/crudveste');

    }

}
